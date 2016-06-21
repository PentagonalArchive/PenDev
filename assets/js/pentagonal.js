(function ($) {
    /**
     * Get Window innerWidth
     * @returns {Number}
     */
    function windowWidth() {
        return window.innerWidth < 320 ? 320 : window.innerWidth;
    }
    /**
     * Get window innerHeight
     * @returns {Number}
     */
    function windowHeight() {
        return window.innerHeight < 320 ? 320 : window.innerHeight;
    }

    //CANVAS
    function constellate(selector, colorUsed, options) {
        if (!selector) {
            return false;
        }
        options = typeof options == 'object' ? options : {};
        colorUsed = typeof colorUsed == 'string' ? colorUsed : 'rgba(255,255,255, .5)';
        var canvas = selector,
            ctx = canvas.getContext('2d'),
            color = colorUsed;

        var mousePosition = {
            x: 50 * canvas.width / 100,
            y: 50 * canvas.height / 100
        };

        var dots = {
            nb: createNb(),
            distance: 100,
            d_radius: 150,
            array: []
        };
        for (var keyatt in options) {
            dots.keyatt = options[keyatt];
        }
        function resetInit() {
            canvas.style.display = 'block';
            canvas.width = $(selector).parent().width() > 320 ? $(selector).parent().width() : 320;
            canvas.height = $(selector).parent().height() > 320 ? $(selector).parent().height() :320;
            ctx.fillStyle = color;
            ctx.lineWidth = .1;
            ctx.strokeStyle = color;
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            dots.nb = createNb();
            mousePosition = {
                x: 50 * canvas.width / 100,
                y: 50 * canvas.height / 100
            };
        }

        function createNb()
        {
            v_default = 280;
            var h = windowHeight(),
                w = windowWidth();
            return h < w && h > 720 && w > 1500 ? v_default * 1.2
                : (
                h < w && h > 720 && w < 1500 && w > 1300
                ? v_default * 1.15
                    : (
                    h > w && h > 1500 && w > 720
                    ? v_default * 1.3
                    : (
                        h > w && h > 720 && w > 720 && h < 480
                        ? v_default * 0.95
                        : (
                            h < 600 && w < 640
                            ? v_default * 0.8
                            : (
                                h < 900 && w < 640
                                ? v_default*.5
                                : v_default*.9
                            )
                        )
                    )
                )
            );
        }

        resetInit();

        function Dot(){
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;

            this.vx = -.5 + Math.random();
            this.vy = -.5 + Math.random();

            this.radius = Math.random();
        }

        Dot.prototype = {
            create: function(){
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
                ctx.fill();
            },

            animate: function(){
                for(i = 0; i < dots.nb; i++){

                    var dot = dots.array[i];

                    if(dot.y < 0 || dot.y > canvas.height){
                        dot.vx = dot.vx;
                        dot.vy = - dot.vy;
                    }
                    else if(dot.x < 0 || dot.x > canvas.width){
                        dot.vx = - dot.vx;
                        dot.vy = dot.vy;
                    }
                    dot.x += dot.vx;
                    dot.y += dot.vy;
                }
            },

            line: function(){
                for(i = 0; i < dots.nb; i++){
                    for(j = 0; j < dots.nb; j++){
                        i_dot = dots.array[i];
                        j_dot = dots.array[j];

                        if((i_dot.x - j_dot.x) < dots.distance && (i_dot.y - j_dot.y) < dots.distance && (i_dot.x - j_dot.x) > - dots.distance && (i_dot.y - j_dot.y) > - dots.distance){
                            if((i_dot.x - mousePosition.x) < dots.d_radius && (i_dot.y - mousePosition.y) < dots.d_radius && (i_dot.x - mousePosition.x) > - dots.d_radius && (i_dot.y - mousePosition.y) > - dots.d_radius){
                                ctx.beginPath();
                                ctx.moveTo(i_dot.x, i_dot.y);
                                ctx.lineTo(j_dot.x, j_dot.y);
                                ctx.stroke();
                                ctx.closePath();
                            }
                        }
                    }
                }
            }
        };

        function createDots(){
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for(i = 0; i < dots.nb; i++){
                dots.array.push(new Dot());
                dot = dots.array[i];

                dot.create();
            }

            dot.line();
            dot.animate();
        }
        $(window).on('resize', resetInit);
        $(window).on('mousemove mouseleave', function(e){
            if(e.type == 'mousemove') {
                var target_on = $(selector);
                mousePosition.x = e.pageX;
                mousePosition.y = target_on.offset().top > 0 ? (e.pageY - target_on.offset().top) : e.pageY;
            }
        });
        setInterval(createDots, 1000/30);
    }
    /** check ready */
    $(document).ready(function () {
        $('canvas.node-pointer').each(function() {
            // init canvas
            constellate(this);
        })
        $('a[href^=#]').on('click', function (e) {
            var _href = this.href.replace(/.+\#(.*)/, '$1');
            if (! _href.match(/[^a-z0-9\-\_]/i) && $('#'+ _href).length) {
                e.preventDefault();
                $('html, body').animate({scrollTop: $('#'+_href).offset().top});
                return false;
            } else if (_href == '') {
                e.preventDefault();
                $('html, body').animate({scrollTop: 0});
                return false;
            }
        });
        /**
         * Typed effect
         */
        var typed= $('.typed');
        if (typed.length) {
            var z_typed = 0;
            function startTyped(selector, cb) {
                if (typeof selector[z_typed] == 'undefined' || selector.length < z_typed) {
                    return;
                }
                var blink_text = '<span class="blink" style="display:inline-block;position: absolute">_</span>';
                var this_ = $(selector[z_typed]);
                var _text = this_.text();
                _split = _text.split('');
                _length = (_split.length-1);
                var c = 0;
                var retval = false;
                var Int = setInterval(function () {
                    if (c > _length) {
                        retval = true;
                        clearInterval(Int);
                        c = 0;
                        z_typed++;
                        if (typeof selector[z_typed] != 'undefined') {
                            setTimeout(function () {
                                startTyped(selector, cb);
                                this_.find('.blink').remove();
                            }, 400);
                        } else {
                            if (cb) {
                                cb();
                            }
                            z_typed = 0;
                        }
                    } else {
                        this_.find('.blink').remove();
                        if (!this_.hasClass('show')) {
                            this_.addClass('show');
                            this_[0].innerHTML = '';
                        }
                        this_[0].innerHTML += _split[c] + blink_text;
                        c++;
                    }
                }, 100);
            }
            setTimeout(function () {
                startTyped(typed, function () {
                    setTimeout(function() {
                        $('#button-explores').addClass('show');
                    }, 1000);
                });
            }, 1000);
        };

        var selector_service = $('#service-show .size-140-rounded');
        var target_service = $('#service-target .col-md-12');
        if (target_service.length == selector_service.length) {
            selector_service.on('click', function (e) {
                target_index = selector_service.index(this);
                if (typeof target_service[target_index] == 'object') {
                    var target_service_target = $(target_service[target_index]);
                    target_service_target.removeClass('hide');
                    $(target_service).not(target_service[target_index]).addClass('hide');
                    $(this).addClass('active');
                    selector_service.not(this).removeClass('active');
                }
            });
            if (!selector_service.hasClass('active') || ! target_service.hasClass('hide')) {
                $(selector_service[0]).click();
            }
        }

    }); /** end ready */
})(window.jQuery);