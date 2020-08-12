document.querySelector('#filter_company_id').addEventListener('change', function () {
    let company_id = this.value || this.options[this.selectedIndex].value;
    let location = window.location.href;
    // console.log(location);
    window.location.href = window.location.href.split('?')[0] + '?company_id=' + company_id;
})
