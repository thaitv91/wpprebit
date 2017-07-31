;(function ($, window, document, undefined) {
  'use strict';

  Foundation.libs.accordion = {
    name : 'accordion',

    version : '5.5.2',

    settings : {
      content_class : 'content',
      active_class : 'active',
      multi_expand : false,
      toggleable : true,
      callback : function () {}
    },

    init : function (scope, method, options) {
      this.bindings(method, options);
    },

    events : function (instance) {
      var self = this;
      var S = this.S;
      self.create(this.S(instance));

      S(this.scope)
      .off('.fndtn.accordion')
      .on('click.fndtn.accordion', '[' + this.attr_name() + '] > dd > a, [' + this.attr_name() + '] > li > a', function (e) {
        var accordion = S(this).closest('[' + self.attr_name() + ']'),
            groupSelector = self.attr_name() + '=' + accordion.attr(self.attr_name()),
            settings = accordion.data(self.attr_name(true) + '-init') || self.settings,
            target = S('#' + this.href.split('#')[1]),
            aunts = $('> dd, > li', accordion),
            siblings = aunts.children('.' + settings.content_class),
            active_content = siblings.filter('.' + settings.active_class);

        e.preventDefault();

        if (accordion.attr(self.attr_name())) {
          siblings = siblings.add('[' + groupSelector + '] dd > ' + '.' + settings.content_class + ', [' + groupSelector + '] li > ' + '.' + settings.content_class);
          aunts = aunts.add('[' + groupSelector + '] dd, [' + groupSelector + '] li');
        }

        if (settings.toggleable && target.is(active_content)) {
          target.parent('dd, li').toggleClass(settings.active_class, false);
          target.toggleClass(settings.active_class, false);
          S(this).attr('aria-expanded', function(i, attr){
              return attr === 'true' ? 'false' : 'true';
          });
          settings.callback(target);
          target.triggerHandler('toggled', [accordion]);
          accordion.triggerHandler('toggled', [target]);
          return;
        }

        if (!settings.multi_expand) {
          siblings.removeClass(settings.active_class);
          aunts.removeClass(settings.active_class);
          aunts.children('a').attr('aria-expanded','false');
        }

        target.addClass(settings.active_class).parent().addClass(settings.active_class);
        settings.callback(target);
        target.triggerHandler('toggled', [accordion]);
        accordion.triggerHandler('toggled', [target]);
        S(this).attr('aria-expanded','true');
      });
    },

    create: function($instance) {
      var self = this,
          accordion = $instance,
          aunts = $('> .accordion-navigation', accordion),
          settings = accordion.data(self.attr_name(true) + '-init') || self.settings;

      aunts.children('a').attr('aria-expanded','false');
      aunts.has('.' + settings.content_class + '.' + settings.active_class).children('a').attr('aria-expanded','true');

      if (settings.multi_expand) {
        $instance.attr('aria-multiselectable','true');
      }
    },

    off : function () {},

    reflow : function () {}
  };
}(jQuery, window, window.document));

var $html = $('html');
var $body = $('body');
var $window = $(window);
var $this = $(this);
var section = $('.section_');
var sectionSVG = section.find('svg').find('*');
(function ($, window, document) {
    'use strict';

    var page = {
            init: function () {
                var categoryList = $('.category--box');
                var categoryItem = categoryList.find('ul').find('a')
                var accordNav = $('.accordion-navigation');
                var accordionLink = $('.nav-link-title');

                categoryItem.on('click', function (e) {
                    e.preventDefault();
                    var target = $(this).attr('href');
                    setTimeout(function () {
                        $('html, body').animate({scrollTop: $(target).offset().top - 150 + 'px'}, 700,'easeInOutExpo');
                    }, 300);
                });
                var $modal = $('.reveal-modal.suscr_');
                var inp = $modal.find('.input-holder');
                inp.eq(0).find('input').attr('placeholder', 'Enter your email');
                inp.eq(1).find('input').attr('placeholder', 'First Name');
                inp.eq(2).find('input').attr('placeholder', 'Last Name');




                $(document).foundation({
                    accordion: {
                        // specify the class used for accordion panels
                        content_class: 'content',
                        // specify the class used for active (or open) accordion panels
                        active_class: 'active',
                        // allow multiple accordion panels to be active at the same time
                        multi_expand: true
                        // allow accordion panels to be closed by clicking on their headers
                    }
                });
                accordNav.each(function () {
                    $(this).find('.nav-link-title').on('click', function () {
                        $this.toggleClass('active');
                    });
                })
            },
            load: function () {
            },
            resize: function () {
            },
            scroll: function () {
            }
        }
        ;

    $(document).ready(page.init);
    $(window).on({
        'load': page.load,
        'resize': page.resize,
        'scroll': page.scroll
    });
})
(jQuery, window, document);

