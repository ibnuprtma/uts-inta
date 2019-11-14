$(document).ready(function () {

    url = '/mediated/getData'
    
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