jQuery(document).ready(function($){var a=parseInt(pbd_alp.startPage)+1,p=parseInt(pbd_alp.maxPages),o=pbd_alp.nextLink;a<=p&&($("#content").append('<div class="pbd-alp-placeholder-'+a+'"></div>').append('<p id="pbd-alp-load-posts"><a href="#">Load More Posts</a></p>'),$(".navigation").remove()),$("#pbd-alp-load-posts a").click(function(){return a<=p?($(this).text("Loading posts..."),$(".pbd-alp-placeholder-"+a).load(o+" .post",function(){a++,o=o.replace(/\/page\/[0-9]?/,"/page/"+a),$("#pbd-alp-load-posts").before('<div class="pbd-alp-placeholder-'+a+'"></div>'),a<=p?$("#pbd-alp-load-posts a").text("Load More Posts"):$("#pbd-alp-load-posts a").text("No more posts to load.")})):$("#pbd-alp-load-posts a").append("."),!1})});