window.format = (function() {
    function decimal(value = ''){
        if (!value)  {
            return "0";
        }
        return parseInt(value).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
    }
    
    //45352568 => 45-35-2568
    function desenho(value = ''){
        return value.trim().replace(/(\d{2})(\d{2})(\d{4})/, '$1-$2-$3');
    }
    
    function produto(value = ''){
        return value.trim().replace(/(\w)(\d{2})(\d{2})(\d{4})(\w)/, '$1-$2-$3-$4-$5');
    }

    function number(value = '') {
        if (!value)  {
            return "0";
        }
        return parseInt(value.replace(/[^0-9]/g,''));
    }
    
    function dateTime(value = '') {
        if (moment(value).isValid()) {
            return moment(value).format('DD/MM/YYYY HH:mm');
        }
    }
    
    function date(value = '') {
        if (moment(value).isValid()) {
            return moment(value).format('DD/MM/YYYY');
        }
    }
    return {
        produto: produto,
        desenho: desenho,
        decimal: decimal,
        number: number,
        dateTime: dateTime,
        date: date
    };
})();