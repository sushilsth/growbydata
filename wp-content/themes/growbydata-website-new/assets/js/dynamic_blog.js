       var actions = {"action": "getposts"};
       var paged_actions = {"action": "getposts_pagination"};

       var ob = {
         paginate:function(page_number, page_status){
             if(page_status == 'in-active'){
                jQuery(".gbd-blog-posts").height(jQuery(".gbd-blog-posts").height());
                 actions.pg = page_number;
                 paged_actions.pg = page_number;

                 this.populate_blog_posts();

             }
         },
         populate_blog_posts: function (flag) {
            var flag = (flag) ? flag : false;
            jQuery.get(site_url + "/wp-admin/admin-ajax.php", actions, function (res) {
                jQuery(".gbd-blog-posts").html(jQuery(res));
                
                jQuery.get(site_url + "/wp-admin/admin-ajax.php", paged_actions, function (res) {
                    jQuery(".gbd-blog-posts").append(jQuery(res));
                    console.log(flag);
                    (flag == true) ? "" : jQuery(window).scrollTop(jQuery(".gbd-most-recent-posts").offset().top - 100);

                    jQuery(".gbd-blog-posts article").each(function(){
                        jQuery(this).show().addClass("pullDown");
                    });
                    jQuery(".gbd-blog-posts").height("");

                });

            });
        },
        search_posts: function () {
            var search_text = jQuery(".gbd-search-blog input.search-field").val();
            var selected_cat = jQuery("#post_category").val();

            if(search_text.length){
                actions = {"action": "getposts", "gbd_search": search_text};
                actions.category = jQuery("#post_category").val();
                paged_actions = {"action": "getposts_pagination", "gbd_search": search_text};

            }
            else{
                actions = {"action": "getposts"};
                paged_actions = {"action": "getposts_pagination"};
                paged_actions.category = jQuery("#post_category").val();
            }
            this.populate_blog_posts();
        },
        navigate_by_category : function(){
            var thiss = this;
            jQuery("#post_category").change(function(){
                jQuery(".gbd-blog-posts").height(jQuery(".gbd-blog-posts").height());
                var search_text = jQuery(".gbd-search-blog input.search-field").val();
                var selected_cat = jQuery("#post_category").val();
                if(search_text.length) {
                    actions = {"action": "getposts", "gbd_search": search_text};
                    actions.category = jQuery("#post_category").val();
                    paged_actions = {"action": "getposts_pagination", "gbd_search": search_text};
                } else {
                    actions = {"action": "getposts"};
                    actions.category = jQuery("#post_category").val();
                    paged_actions = {"action": "getposts_pagination"};
                    paged_actions.category = jQuery("#post_category").val();
                }
                thiss.populate_blog_posts();
                jQuery(window).scrollTop(jQuery(".gbd-most-recent-posts").offset().top - 100);
            });
        },
        init: function () {
            this.populate_blog_posts(true);
            this.navigate_by_category();

            jQuery(".gbd-search-blog form.search-form").submit(function (e) {
                jQuery(".gbd-blog-posts").height(jQuery(".gbd-blog-posts").height());
                e.preventDefault();
                ob.search_posts();
                jQuery(window).scrollTop(jQuery(".gbd-most-recent-posts").offset().top - 100);
            });
        }

    };
    jQuery(function () {
       // ob.init();

    });