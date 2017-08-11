(function() {
	tinymce.create('tinymce.plugins.dbank', {
		/**
		 * Initializes the plugin, this will be executed after the plugin has been created.
		 * This call is done before the editor instance has finished it's initialization so use the onInit event
		 * of the editor instance to intercept that event.
		 *
		 * @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
		 * @param {string} url Absolute URL to where the plugin is located.
		 */
		init : function(ed, url) {
			// Register the command so that it can be invoked by using tinyMCE.activeEditor.execCommand('mceExample');

			ed.addCommand('mcedbank', function() {
				ed.windowManager.open({
					file : url + '/dbank_explorer.php',
					width : 515,
					height : 350,
					inline : 0    //0 for IE, http://tinymce.moxiecode.com/punbb/viewtopic.php?id=15594
				}, {
					plugin_url : url // Plugin absolute URL
				});
			});

			// Register example button
			ed.addButton('dbank', {
				title : 'dbank uploader',
				cmd : 'mcedbank',
				image : url + '/dbank.png'
			});

			// Add a node change handler, selects the button in the UI when a image is selected
			ed.onNodeChange.add(function(ed, cm, n) {
				cm.setActive('dbank', n.nodeName == 'IMG');
			});
		},

		/**
		 * Returns information about the plugin as a name/value array.
		 * The current keys are longname, author, authorurl, infourl and version.
		 *
		 * @return {Object} Name/value array containing information about the plugin.
		 */
		getInfo : function() {
			return {
					longname  : 'dbank uploader',
					author 	  : 'pipa',
					authorurl : 'http://pipa.tk',
					infourl   : 'http://pipa.tk',
					version   : "0.1"
			};
		}
	});

	// Register plugin
	tinymce.PluginManager.add('dbank', tinymce.plugins.dbank);
})();
