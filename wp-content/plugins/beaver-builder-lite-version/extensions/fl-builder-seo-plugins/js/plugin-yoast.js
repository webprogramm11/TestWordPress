(function($){
			$(document).ready(function(){

				BeaverPlugin = function() {
					if ( typeof window.YoastSEO === 'undefined' ) {
						return false;
					}
					window.YoastSEO.app.registerPlugin( 'beaverPlugin', {status: 'ready'} );
					window.YoastSEO.app.registerModification( 'content', this.myContentModification, 'beaverPlugin', 5 );
				}
				BeaverPlugin.prototype.myContentModification = function(data) {
					return window.bb_seo_data.content;
				};
				new BeaverPlugin();
			});
})(jQuery);
