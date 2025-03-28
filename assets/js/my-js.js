$('.mg-product-icon .quick-view-product-modal').on('click', function(){
    const id = $(this).attr('data-id');
    const parent = $('.mg-quick-view-modal-outer .mg-quick-view-modal-content');
    const loading = parent.find('#product-loading');
    const content = parent.find('#product-content');
    loading.show();
    content.remove();
    fetch('include/modalProduct/content.php')
        .then(resp=>resp.text())
        .then(txt=>{
            loading.hide();
            parent.append(txt);
            setTimeout(()=>add_slick('#product-content .mg-quick-view-slider'), 100);
        });
})