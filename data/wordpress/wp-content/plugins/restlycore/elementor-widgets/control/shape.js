;
(function($, window, document) {
    'use strict';

    $(window).on('elementor/frontend/init', function() {

        elementorFrontend.hooks.addAction('frontend/element_ready/section', function($scope) {

            if (elementorFrontend.isEditMode()) {

                var settings = elementorFrontend.config.elements.data[$scope.data('model-cid')].attributes;

                if (settings && settings.tp_section_images.length) {

                    $scope.find('.tp-section-image-' + $scope.data('id')).remove();

                    var $items = '';

                    $.each(settings.tp_section_images.models, function(index, item) {
                        $items += '<div class="shapeanimation tp-section-image tp-section-image-' + $scope.data('id') + ' elementor-repeater-item-' + item.attributes._id + '"></div>';
                    });

                    if ($items.length) {
                        $scope.prepend($items);
                    }

                }

            } else {

                if ($scope.data('tp-section-image')) {

                    var $items = $('.tp-section-image-' + $scope.data('id'));

                    if ($items.length) {
                        $scope.prepend($items);
                    }

                }

            }

        });

    });

})(jQuery, window, document);