import $ from 'jquery';

class DashboardDatepicker {
    constructor(){
        this.pickerButton = $('.dashboard__datepicker__inputs__trigger');
        this.pickerInputs = $('.dashboard__datepicker__inputs');
        this.daterangepickerListElements = $('.ranges').first('li').addClass('foo');
        this.document = $(document);
        this.events();
    }

    events(){
        this.pickerButton.click(()=>this.showDatepicker());
        this.document.keyup((e)=>this.hideDatepicker(e));
        this.daterangepickerListElements.each(function(){
            $(this).addClass('foo');
            console.log(this);
        });
    }

    showDatepicker(){
        this.pickerButton.hide();
        this.pickerInputs.show();
    }

    hideDatepicker(e){
        if(e.keyCode==27){
            this.pickerButton.show();
            this.pickerInputs.hide();
        }
    }
}

export default DashboardDatepicker;