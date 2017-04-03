(function() {
function Radio(radioGroup) {
    this.radioGroup = radioGroup;
    this.radio = this.radioGroup + " .js-radio";
}

var klass = Radio.prototype;
var self = Radio;
SCF.Radio = Radio;

klass.init = function() {
    this.bindEvents();
};

klass.bindEvents = function() {
    var _this = this;

    $(this.radio).click(function() {
        $(_this.radio).removeClass("checked");
        $(this).addClass("checked");
		
		if($(_this.radioGroup).children("input[type='hidden']").length > 0)
		{
			$(_this.radioGroup).children("input[type='hidden']").val($(this).attr("optionvalue"));
		}
    });
}

}());
