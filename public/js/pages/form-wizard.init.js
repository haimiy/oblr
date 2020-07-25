// $(function(){
//     $("#form-horizontal").steps({headerTag:"h3",bodyTag:"fieldset",transitionEffect:"slide"})
// });
var form = $("#form-horizontal");


form.steps({
    headerTag:"h3",
    bodyTag:"fieldset",
    transitionEffect:"slide",
    onStepChanging: function (event, currentIndex, newIndex) {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        form.submit();
    }
});
