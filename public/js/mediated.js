$(document).ready(function () {

    
    $('#form-mediated').submit(function (event) {
        var url = ""
        var tokped = ""
        var shopee = ""
        event.preventDefault();
        $.each($("input[name='tp']:checked"), function(){
            tokped += $(this).val() + "."
        });

        $.each($("input[name='sp']:checked"), function(){
            shopee += $(this).val() + "."
        });

        if (tokped == "") {
            tokped = "n"
        }else if(shopee == ""){
            shopee = "n" 
        }

        url = "/mediated/getData/" + tokped + "/" + shopee

        
        
        $('#table-mediated').DataTable().ajax.url(url).load()
        
    })

    var url = '/mediated/getData/n/n'

    var table = $('#table-mediated').DataTable({
        processing: true,
        serverSide: true,
        destroy: true,
        searching: false,
        ajax: {
            type: "GET",
            url: url,
        },
        columns: [
            {
                title: 'Nama',
                data: 'name',
                name: 'name'
            },
            {
                title: 'Harga',
                data: 'price',
                name: 'price'
            },
            {
                title: 'Rating',
                data: 'rating',
                name: 'rating'
            },
            {
                title: 'Deskripsi',
                data: 'description',
                name: 'description'
            },
            {
                title: 'Sumber',
                data: 'source',
                name: 'source'
            },
        ]
    });
})