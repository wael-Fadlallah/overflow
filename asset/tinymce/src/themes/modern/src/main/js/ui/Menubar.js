/**
 * Menubar.js
 *
 * Released under LGPL License.
 * Copyright (c) 1999-2016 Ephox Corp. All rights reserved
 *
 * License: http://www.tinymce.com/license
 * Contributing: http://www.tinymce.com/contributing
 */

define(
  'tinymce.themes.modern.ui.Menubar',
  [
    'ephox.katamari.api.Arr',
    'ephox.katamari.api.Fun',
    'tinymce.core.util.Tools',
    'tinymce.themes.modern.api.Settings'
  ],
  function (Arr, Fun, Tools, Settings) {
    var defaultMenus = {
      file: { title: 'File', items: 'newdocument restoredraft | preview | print' },
      edit: { title: 'Edit', items: 'undo redo | cut copy paste pastetext | selectall' },
      view: { title: 'View', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen' },
      insert: { title: 'Insert', items: 'image link media template codesample inserttable | charmap hr | pagebreak nonbreaking anchor toc | insertdatetime' },
      format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript codeformat | blockformats align | removeformat' },
      tools: { title: 'Tools', items: 'spellchecker spellcheckerlanguage | a11ycheck' },
      table: { title: 'Table' },
      help: { title: 'Help' }
    };

    var delimiterMenuNamePair = Fun.constant({ name: '|', item: { text: '|' } });

    var createMenuNameItemPair = function (name, item) {
      var menuItem = item ? { name: name, item: item } : null;
      return name === '|' ? delimiterMenuNamePair() : menuItem;
    };

    var hasItemName = function (namedMenuItems, name) {
      return Arr.findIndex(namedMenuItems, function (namedMenuItem) {
        return namedMenuItem.name === name;
      }).isSome();
    };

    var isSeparator = function (namedMenuItem) {
      return namedMenuItem && namedMenuItem.item.text === '|';
    };

    var cleanupMenu = function (namedMenuItems) {
      return Arr.filter(namedMenuItems, function (namedMenuItem, i, namedMenuItems) {
        if (isSeparator(namedMenuItem)) {
          return i > 0 && i < namedMenuItems.length - 1 && !isSeparator(namedMenuItems[i - 1]);
        } else {
          return true;
        }
      });
    };

    var createMenu = function (editorMenuItems, menus, removedMenuItems, context) {
      var menuButton, menu, namedMenuItems, isUserDefined;

      // User defined menu
      if (menus) {
        menu = menus[context];
        isUserDefined = true;
      } else {
        menu = defaultMenus[context];
      }

      if (menu) {
        menuButton = { text: menu.title };
        namedMenuItems = [];

        // Default/user defined items
        Tools.each((menu.items || '').split(/[ ,]/), function (name) {
          var namedMenuItem = createMenuNameItemPair(name, editorMenuItems[name]);

          if (namedMenuItem && !removedMenuItems[name]) {
            namedMenuItems.push(namedMenuItem);
          }
        });

        // Added though context
        if (!isUserDefined) {
          Tools.each(editorMenuItems, function (item, name) {
            if (item.context === context && !hasItemName(namedMenuItems, name)) {
              if (item.separator === 'before') {
                namedMenuItems.push(delimiterMenuNamePair());
              }

              if (item.prependToContext) {
                namedMenuItems.unshift(createMenuNameItemPair(name, item));
              } else {
                namedMenuItems.push(createMenuNameItemPair(name, item));
              }

              if (item.separator === 'after') {
                namedMenuItems.push(delimiterMenuNamePair());
              }
            }
          });
        }

        menuButton.menu = Arr.map(cleanupMenu(namedMenuItems), function (menuItem) {
          return menuItem.item;
        });

        if (!menuButton.menu.length) {
          return null;
        }
      }

      return menuButton;
    };

    var getDefaultMenubar = function (editor) {
      var name, defaultMenuBar = [];
      var menu = Settings.getMenu(editor);

      if (menu) {
        for (name in menu) {
          defaultMenuBar.push(name);
        }
      } else {
        for (name in defaultMenus) {
          defaultMenuBar.push(name);
        }
      }

      return defaultMenuBar;
    };

    var createMenuButtons = function (editor) {
      var menuButtons = [];
      var defaultMenuBar = getDefaultMenubar(editor);
      var removedMenuItems = Tools.makeMap(Settings.getRemovedMenuItems(editor).split(/[ ,]/));

      var menubar = Settings.getMenubar(editor);
      var enabledMenuNames = typeof menubar === "string" ? menubar.split(/[ ,]/) : defaultMenuBar;
      for (var i = 0; i < enabledMenuNames.length; i++) {
        var menuItems = enabledMenuNames[i];
        var menu = createMenu(editor.menuItems, Settings.getMenu(editor), removedMenuItems, menuItems);
        if (menu) {
          menuButtons.push(menu);
        }
      }

      return menuButtons;
    };

    return {
      createMenuButtons: createMenuButtons
    };
  }
);
