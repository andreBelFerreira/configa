window.AutoScroll = (function ($) {

    class AutoScroll {

        constructor(containerEl, direction, waitTime = 3000, speedLevel = 2,) {
            this.container = containerEl;
            if (AutoScroll.isValidDirection(direction)) {
                this.direction = direction;
            } else {
                throw "invalid direction. Use \"vertical\" or \"vertical\" to second param.";
            }
            this.container.onscroll = this.getScrollHandle.bind(this);
            this.speedLevel = speedLevel;
            this.waitTime = (waitTime < 1000) ? 1000 : waitTime;
        }

        start() {
            if(this.direction === "vertical") {
                this.handleScrollV();
            } else {
                this.handleScrollH();
            }
        }

        static isValidDirection(direction) {
            return direction === "vertical" || direction === "horizontal";
        }

        getScrollHandle() {
            if (this.direction === "vertical") {
                this.handleScrollV();
            } else {
                this.handleScrollH();
            }
        }

        handleScrollV() {
            const c = this.container;
            const scrollBottom = (c.scrollHeight - c.offsetHeight - c.scrollTop);
            if (c.scrollTop <= 0) {
                setTimeout( this.scrollToBottom.bind(this), this.waitTime);
            }
            if (scrollBottom <= 0) {
                setTimeout( this.scrollToTop.bind(this), 1000);
            }
        }

        handleScrollH() {
            const c = this.container;
            const scrollRight = (c.scrollWidth - c.offsetWidth - c.scrollLeft);
            if (scrollRight <= 0) {
                setTimeout(this.scrollToLeft.bind(this), 1000);
            }
            if (c.scrollLeft <= 0) {
                setTimeout(this.scrollToRight.bind(this), this.waitTime);
            }
        }
        
        getScrollLength() {
            return this.direction === "vertical" 
                ? this.container.scrollHeight - this.container.offsetHeight
                : this.container.scrollWidth - this.container.offsetWidth;
        }

        getScrollSpeed() {
            return this.getScrollLength() / (this.speedLevel / 25);
        }

        scrollToTop() {
            $(this.container).animate({ scrollTop: 0 }, this.getScrollSpeed(), 'linear');
        }

        scrollToBottom() {
            const scrollTop = this.getScrollLength();
            $(this.container).animate({ scrollTop }, this.getScrollSpeed(), 'linear');
        }

        scrollToLeft() {
            $(this.container).animate({ scrollLeft: 0 }, this.getScrollSpeed(), 'linear');
        }

        scrollToRight() {
            const scrollLeft = this.getScrollLength();
            $(this.container).animate({ scrollLeft }, this.getScrollSpeed(), 'linear');
        }
    }

    return AutoScroll;
})(jQuery);