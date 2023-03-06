// Project accordion btn animation
$(function () {
    $(".btn-round").click(
        { animateIn: "closeButton", animateOut: "plusButton" },
        animate_function
    );

    function animate_function(event) {
        if ($(this).hasClass(event.data.animateIn)) {
            $(this)
                .removeClass(event.data.animateIn)
                .addClass(event.data.animateOut);
        } else if ($(this).hasClass(event.data.animateOut)) {
            $(this)
                .removeClass(event.data.animateOut)
                .addClass(event.data.animateIn);
        } else {
            $(this).addClass("animated " + event.data.animateIn);
        }
    }
});
// Project accordion btn animation end

// Project accordion start
const accordion = document.querySelectorAll(".accordion");

accordion.forEach((element) => {
    element.addEventListener("click", () => {
        element.classList.toggle("toggle");
        let panel = element.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
});

$(document).ready(function () {
    $(".accordion").click(function () {
        $(this).parent().toggleClass("active-border");
    });
});
// Project accordion end

// Header hamburger btn
$(document).ready(function () {
    $(".hamburger").on("click", function () {
        $(".hamburger").toggleClass("is-active");
        $(".navigation-list").toggleClass("un-active");
    });
    // $(".article-txt").hover(function () {
    //     $(this).toggleClass("article-news-txt");
    //     $(".article-news-p").toggleClass("un-active");
    //  });
    // $(window).scroll(function() {
    //     if ($(document).scrollTop() > 200) {
    //         $("header").addClass("header-bg");
    //         $("header").removeClass("main-nav-header");
    //     } else {
    //         $("header").removeClass("header-bg");
    //         $("header").addClass("main-nav-header");
    //     }
    // });
});

// slider js
$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 24,
    padding: 30,
    width: 3300,
    navText: [
        "<span aria-label='Previous'><i class='fa-sharp fa-solid fa-arrow-left'></i></span>",
        "<span aria-label='Next'><i class='fa-sharp fa-solid fa-arrow-right'></i></span>",
    ],
    dots: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            loop: false,
        },
        768: {
            items: 2,
            nav: true,
            loop: false,
            autoHeight: true,
        },
        992: {
            items: 3,
            nav: true,
            loop: false,
            margin: 15,
            autoHeight: true,
        },
        1200: {
            items: 3,
            nav: true,
            loop: false,
            margin: 20,
            autoHeight: true,
        },
        1400: {
            items: 4,
            margin: 24,
            nav: true,
            loop: false,
        },
    },
});


$(document).ready(function () {
    $(".service").on("click", function () {
        var service_id = $(this).attr("data-id");

        var subservice_id = $(this).attr('data-id-subservice');
        console.log(service_id);
        console.log(subservice_id);



        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            url: "/",
            type: "POST",
            data: {
                service_id: service_id,
                subservice_id: subservice_id,
            },
            success: function (data) {
               var projects = data.projects;
               var subservices = data.subservices;
               var html = '';
               var list = '';
                if (subservices.length > 0){
                    for (let i = 0; i < subservices.length; i++){
                        list +=
                            '<a class="subservice accordion-list-item btn-accordion" data-id="'+ subservices[i]['id'] +'">'
                        + subservices[i]['title'] +
                            '</a>'
                    }
                }
                $(".subservices-list").html(list);

               if (projects.length > 0){
                   for (let i = 0; i < projects.length; i++){
                       var dateString = projects[i]['created_at'];
                       var options = { year: 'numeric', month: 'long', day: 'numeric' };
                       var myDate = new Date(dateString);
                       var created_at = myDate.toLocaleDateString("ru-US", options)
                       html +=
                           '<div class="info-list-wrapper">' +
                           '<div class="row">' +
                           '<div class="col-xl-4 col-lg-4 col-md-12 project-info-list">' +
                           '<div class="info-list-title">' +
                           '<div class="date">' +
                           "<span>" +
                           created_at +
                           "</span>" +
                           "</div>" +
                           "<h4>" +
                           projects[i]['title'] +
                           "</h4>" +
                           "</div>" +
                           "</div>" +

                           '<div class="col-xl-4 col-lg-4 col-md-12 project-info-list">' +
                           '<div class="info-list-txt">' +
                           '<p class="date">' +
                           projects[i]['short_descr'] +
                           "</p>" +
                           "</div>" +
                           "</div>" +

                           '<div class="col-xl-4 col-lg-4 col-md-12 project-info-list">' +
                           '<div class="info-list-img">' +
                           '<img src="'+projects[i].partner['file_url']+'">'+
                           "</div>" +
                           "</div>" +
                           "</div>" +
                           "</div>"
                       ;
                   }
               }
               $('.project-info-list-wrapper').html(html);
            },
        });
    });
});

$(document).ready(function () {
    $(document).on("click", '.subservice', function () {
        var subservice_id = $(this).attr("data-id");

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            url: "/",
            type: "POST",
            data: {
                subservice_id: subservice_id,
            },
            success: function (data){
                var projects = data.projects;
                var html = '';
                if (projects.length > 0){
                    for (let i = 0; i < projects.length; i++){
                        var dateString = projects[i]['created_at'];
                        var options = { year: 'numeric', month: 'long', day: 'numeric' };
                        var myDate = new Date(dateString);
                        var created_at = myDate.toLocaleDateString("ru-US", options)
                        html +=
                            '<div class="info-list-wrapper">' +
                            '<div class="row">' +
                            '<div class="col-xl-4 col-lg-4 col-md-12 project-info-list">' +
                            '<div class="info-list-title">' +
                            '<div class="date">' +
                            "<span>" +
                            created_at +
                            "</span>" +
                            "</div>" +
                            "<h4>" +
                            projects[i]['title'] +
                            "</h4>" +
                            "</div>" +
                            "</div>" +

                            '<div class="col-xl-4 col-lg-4 col-md-12 project-info-list">' +
                            '<div class="info-list-txt">' +
                            '<p class="date">' +
                            projects[i]['short_descr'] +
                            "</p>" +
                            "</div>" +
                            "</div>" +

                            '<div class="col-xl-4 col-lg-4 col-md-12 project-info-list">' +
                            '<div class="info-list-img">' +
                            '<img src="'+projects[i].partner['file_url']+'">'+
                            "</div>" +
                            "</div>" +
                            "</div>" +
                            "</div>"
                        ;
                    }
                }
                $('.project-info-list-wrapper').html(html);
            },
        });

    });
});

$(document).ready(function () {
    $(document).on("click", ".date", function () {
        var date = $(this).attr("date");

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            url: "/",
            type: "POST",
            data: {
                date: date,
            },
            success: function (data){
                var projects = data.projects;
                var htmlDate = '';
                if (projects.length > 0){
                    for (let i = 0; i < projects.length; i++){
                        var dateString = projects[i]['created_at'];
                        var options = { year: 'numeric', month: 'long', day: 'numeric' };
                        var myDate = new Date(dateString);
                        var created_at = myDate.toLocaleDateString("ru-US", options)
                        console.log(created_at);
                        htmlDate +=
                            '<div class="info-list-wrapper">' +
                            '<div class="row">' +
                            '<div class="col-xl-4 col-lg-4 col-md-12 project-info-list">' +
                            '<div class="info-list-title">' +
                            '<div class="date">' +
                            "<span>" +
                            created_at +
                            "</span>" +
                            "</div>" +
                            "<h4>" +
                            projects[i]['title'] +
                            "</h4>" +
                            "</div>" +
                            "</div>" +

                            '<div class="col-xl-4 col-lg-4 col-md-12 project-info-list">' +
                            '<div class="info-list-txt">' +
                            '<p class="date">' +
                            projects[i]['short_descr'] +
                            "</p>" +
                            "</div>" +
                            "</div>" +

                            '<div class="col-xl-4 col-lg-4 col-md-12 project-info-list">' +
                            '<div class="info-list-img">' +
                            '<img src="'+projects[i].partner['file_url']+'">'+
                            "</div>" +
                            "</div>" +
                            "</div>" +
                            "</div>"
                        ;
                    }
                }
                $('.project-info-list-wrapper').html(htmlDate);
            }
        });
    });
});

$(document).ready(function () {
   $(document).on("click", ".industries", function (){
       var industry_id = $(this).attr("data-direction");
       console.log(industry_id);
       $.ajaxSetup({
           headers: {
               "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
           },
       });
       $.ajax({
           url: "/",
           type: "POST",
           data: {
               industry_id: industry_id,
           },
           success: function (data){
               console.log(data)
               var projects = data.projects;
               var htmlDir = '';
               if (projects.length > 0){
                   for (let i = 0; i < projects.length; i++){
                       var dateString = projects[i]['created_at'];
                       var options = { year: 'numeric', month: 'long', day: 'numeric' };
                       var myDate = new Date(dateString);
                       var created_at = myDate.toLocaleDateString("ru-US", options)
                       htmlDir +=
                           '<div class="info-list-wrapper">' +
                           '<div class="row">' +
                           '<div class="col-xl-4 col-lg-4 col-md-12 project-info-list">' +
                           '<div class="info-list-title">' +
                           '<div class="date">' +
                           "<span>" +
                           created_at +
                           "</span>" +
                           "</div>" +
                           "<h4>" +
                           projects[i]['title'] +
                           "</h4>" +
                           "</div>" +
                           "</div>" +

                           '<div class="col-xl-4 col-lg-4 col-md-12 project-info-list">' +
                           '<div class="info-list-txt">' +
                           '<p class="date">' +
                           projects[i]['short_descr'] +
                           "</p>" +
                           "</div>" +
                           "</div>" +

                           '<div class="col-xl-4 col-lg-4 col-md-12 project-info-list">' +
                           '<div class="info-list-img">' +
                           '<img src="'+projects[i].partner['file_url']+'">'+
                           "</div>" +
                           "</div>" +
                           "</div>" +
                           "</div>"
                       ;
                   }
               }
               $('.project-info-list-wrapper').html(htmlDir);
           }
       });
   });
});


$(document). ready(function (){
    $(document).on('click', '.subservice', function (){
        var subservice_id = $(this). attr('data-id');
        console.log(subservice_id);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            }
        });
        $.ajax({
            url: 'articles',
            type: 'POST',
            data: {
                subservice_id: subservice_id,
            },
            success: function (data){
                console.log(data)
                var articles = data.articles;
                console.log(data.articles)
                var article_card = '';
                if (articles.length > 0){
                    for (let i = 0; i < articles.length; i++){
                        var dateString = articles[i]['created_at'];
                        var options = { year: 'numeric', month: 'long', day: 'numeric' };
                        var myDate = new Date(dateString);
                        var created_at = myDate.toLocaleDateString("ru-US", options)
                        article_card +=
                            '<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">'+
                           '<div class="artcile-card">' +
                                '<div class="author">' +
                                    '<div class="author-img">' +
                                        '<img alt="" class="img-fluid move-animation" src="'+articles[i].member['file_url']+'">' +
                                    '</div>' +
                                    '<div class="author-dateails">' +
                                       ' <p class="">'+
                            articles[i].member['name']+
                                        '</p>' +
                                        '<span class="date">'+
                                            created_at +
                                        '</span>' +
                                    '</div>' +
                               ' </div>' +
                               ' <div class="article-img">' +
                                    '<img src="'+articles[i]['file_url']+'" alt=""/>' +
                                '</div>' +
                               ' <div class="article-info">' +
                                   '<div class="article-link">'+
                                        '<a href="article/'+articles[i]["slug"]+'">' +
                            'раздел статьи' +
                                    '</a>' +
                                   ' </div>' +
                                    '<div class="article-header">' +
                                        '<h2>' +
                                            articles[i]['title']+
                                        '</h2>' +
                                    '</div>' +
                                    '<div class="article-txt">' +
                                       '<p>' +
                            articles[i]['short_descr']+
                                        '</p>' +
                                        '<span>'+
                            'время чтения:'+
                            articles[i]['read_time'] +
                                        '</span>'+
                                    '</div>' +
                                '</div>' +
                            '</div>'+
                            '</div>'
                    }
                }
                if (articles.length < 16 || articles.length > 16){
                    $('.load-more').addClass('d-none')
                }

                $('.article-row').html(article_card);
            }
        })
    })
});

$(document). ready(function (){
    $(document).on("click", ".industries", function (){
        var industry_id = $(this).attr("data-direction");
        console.log(industry_id);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            }
        });
        $.ajax({
            url: 'articles',
            type: 'POST',
            data: {
                industry_id: industry_id,
            },
            success: function (data){
                console.log(data)
                var articles = data.articles;
                console.log(data.articles)
                var article_card = '';
                if (articles.length > 0){
                    for (let i = 0; i < articles.length; i++){
                        var dateString = articles[i]['created_at'];
                        var options = { year: 'numeric', month: 'long', day: 'numeric' };
                        var myDate = new Date(dateString);
                        var created_at = myDate.toLocaleDateString("ru-US", options)
                        article_card +=
                            '<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">'+
                            '<div class="artcile-card">' +
                            '<div class="author">' +
                            '<div class="author-img">' +
                            '<img alt="" class="img-fluid move-animation" src="'+articles[i].member['file_url']+'">' +
                            '</div>' +
                            '<div class="author-dateails">' +
                            ' <p class="">'+
                            articles[i].member['name']+
                            '</p>' +
                            '<span class="date">'+
                            created_at +
                            '</span>' +
                            '</div>' +
                            ' </div>' +
                            ' <div class="article-img">' +
                            '<img src="'+articles[i]['file_url']+'" alt=""/>' +
                            '</div>' +
                            ' <div class="article-info">' +
                            '<div class="article-link">'+
                            '<a href="article/'+articles[i]['slug']+'">' +
                            'раздел статьи' +
                            '</a>' +
                            ' </div>' +
                            '<div class="article-header">' +
                            '<h2>' +
                            articles[i]['title']+
                            '</h2>' +
                            '</div>' +
                            '<div class="article-txt">' +
                            '<p>' +
                            articles[i]['short_descr']+
                            '</p>' +
                            '<span>'+
                            'время чтения:'+
                            articles[i]['read_time'] +
                            '</span>'+
                            '</div>' +
                            '</div>' +
                            '</div>'+
                            '</div>'
                    }
                }
                if (articles.length < 16 || articles.length > 16){
                    $('.load-more').addClass('d-none')
                }
                $('.article-row').html(article_card);
            }
        })
    })
});

$(document). ready(function (){
    $(document).on("click", ".member", function (){
        var member_id = $(this).attr("data-id");
        console.log(member_id);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            }
        });
        $.ajax({
            url: 'articles',
            type: 'POST',
            data: {
                member_id: member_id,
            },
            success: function (data){
                console.log(data)
                var articles = data.articles;
                console.log(data.articles)
                var article_card = '';
                if (articles.length > 0){
                    for (let i = 0; i < articles.length; i++){
                        var dateString = articles[i]['created_at'];
                        var options = { year: 'numeric', month: 'long', day: 'numeric' };
                        var myDate = new Date(dateString);
                        var created_at = myDate.toLocaleDateString("ru-US", options)
                        article_card +=
                            '<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">'+
                            '<div class="artcile-card">' +
                            '<div class="author">' +
                            '<div class="author-img">' +
                            '<img alt="" class="img-fluid move-animation" src="'+articles[i].member['file_url']+'">' +
                            '</div>' +
                            '<div class="author-dateails">' +
                            ' <p class="">'+
                            articles[i].member['name']+
                            '</p>' +
                            '<span class="date">'+
                            created_at +
                            '</span>' +
                            '</div>' +
                            ' </div>' +
                            ' <div class="article-img">' +
                            '<img src="'+articles[i]['file_url']+'" alt=""/>' +
                            '</div>' +
                            ' <div class="article-info">' +
                            '<div class="article-link">'+
                            '<a href="article/'+articles[i]['slug']+'">' +
                            'раздел статьи' +
                            '</a>' +
                            ' </div>' +
                            '<div class="article-header">' +
                            '<h2>' +
                            articles[i]['title']+
                            '</h2>' +
                            '</div>' +
                            '<div class="article-txt">' +
                            '<p>' +
                            articles[i]['short_descr']+
                            '</p>' +
                            '<span>'+
                            'время чтения:'+
                            articles[i]['read_time'] +
                            '</span>'+
                            '</div>' +
                            '</div>' +
                            '</div>'+
                            '</div>'
                    }
                }
                if (articles.length < 16 || articles.length > 16){
                    $('.load-more').addClass('d-none')
                }
                $('.article-row').html(article_card);
            }
        })
    })
});

$(document). ready(function (){
    $(document).on("click", ".date", function (){
        var date = $(this).attr("date");
        console.log(date);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            }
        });
        $.ajax({
            url: 'articles',
            type: 'POST',
            data: {
                date: date,
            },
            success: function (data){
                console.log(data)
                var articles = data.articles;
                console.log(data.articles)
                var article_card = '';
                if (articles.length > 0){
                    for (let i = 0; i < articles.length; i++){
                        var dateString = articles[i]['created_at'];
                        var options = { year: 'numeric', month: 'long', day: 'numeric' };
                        var myDate = new Date(dateString);
                        var created_at = myDate.toLocaleDateString("ru-US", options)
                        article_card +=
                            '<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">'+
                            '<div class="artcile-card">' +
                            '<div class="author">' +
                            '<div class="author-img">' +
                            '<img alt="" class="img-fluid move-animation" src="'+articles[i].member['file_url']+'">' +
                            '</div>' +
                            '<div class="author-dateails">' +
                            ' <p class="">'+
                            articles[i].member['name']+
                            '</p>' +
                            '<span class="date">'+
                            created_at +
                            '</span>' +
                            '</div>' +
                            ' </div>' +
                            ' <div class="article-img">' +
                            '<img src="'+articles[i]['file_url']+'" alt=""/>' +
                            '</div>' +
                            ' <div class="article-info">' +
                            '<div class="article-link">'+
                            '<a href="article/'+articles[i]['slug']+'">' +
                            'раздел статьи' +
                            '</a>' +
                            ' </div>' +
                            '<div class="article-header">' +
                            '<h2>' +
                            articles[i]['title']+
                            '</h2>' +
                            '</div>' +
                            '<div class="article-txt">' +
                            '<p>' +
                            articles[i]['short_descr']+
                            '</p>' +
                            '<span>'+
                            'время чтения:'+
                            articles[i]['read_time'] +
                            '</span>'+
                            '</div>' +
                            '</div>' +
                            '</div>'+
                            '</div>'
                    }
                }
                if (articles.length < 16 || articles.length > 16){
                    $('.load-more').addClass('d-none')
                }
                $('.article-row').html(article_card);
            }
        })
    })
});

$(document). ready(function (){
    $(document).on("click", ".load-more", function (){
        var load_more = $(this).attr("data-load");
        console.log(load_more);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            }
        });
        $.ajax({
            url: 'articles',
            type: 'POST',
            data: {
                load_more: load_more,
            },
            success: function (data){

                var articles = data.articles;
                console.log(data.articles)
                var article_card = '';
                if (articles.length > 0){
                    for (let i = 0; i < articles.length; i++){
                        var dateString = articles[i]['created_at'];
                        var options = { year: 'numeric', month: 'long', day: 'numeric' };
                        var myDate = new Date(dateString);
                        var created_at = myDate.toLocaleDateString("ru-US", options)
                        article_card +=
                            '<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">'+
                            '<div class="artcile-card">' +
                            '<div class="author">' +
                            '<div class="author-img">' +
                            '<img alt="" class="img-fluid move-animation" src="'+articles[i].member['file_url']+'">' +
                            '</div>' +
                            '<div class="author-dateails">' +
                            ' <p class="">'+
                            articles[i].member['name']+
                            '</p>' +
                            '<span class="date">'+
                            created_at +
                            '</span>' +
                            '</div>' +
                            ' </div>' +
                            ' <div class="article-img">' +
                            '<img src="'+articles[i]['file_url']+'" alt=""/>' +
                            '</div>' +
                            ' <div class="article-info">' +
                            '<div class="article-link">'+
                            '<a href="'+articles[i]['slug']+'">' +
                            'раздел статьи' +
                            '</a>' +
                            ' </div>' +
                            '<div class="article-header">' +
                            '<h2>' +
                            articles[i]['title']+
                            '</h2>' +
                            '</div>' +
                            '<div class="article-txt">' +
                            '<p>' +
                            articles[i]['descr_title']+
                            '</p>' +
                            '<span>'+
                            'время чтения: 10 минут' +
                            '</span>'+
                            '</div>' +
                            '</div>' +
                            '</div>'+
                            '</div>'
                    }
                }
                if (articles.length < 16 || articles.length > 16){
                    $('.load-more').addClass('d-none')
                }
                $('.article-row').html(article_card);
            }
        })
    })
});


