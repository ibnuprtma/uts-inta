$(document).ready(function () {

    url = '/shopee/search/none'
    


    $('#tokenizing').click(function () {
        url = '/shopee/search/tokenizing'
        $('#table-shopee').DataTable().ajax.url(url).load()
    })

    $('#stemming').click(function () {
        url = '/shopee/search/stemming'
        $('#table-shopee').DataTable().ajax.url(url).load()
    })

    $('#case-folding').click(function () {
        url = '/shopee/search/case-folding'
        $('#table-shopee').DataTable().ajax.url(url).load()
    })

    $('#stopword').click(function () {
        url = '/shopee/search/stopword'
        $('#table-shopee').DataTable().ajax.url(url).load()
    })

    $('#katatanya').click(function () {
        url = '/shopee/search/katatanya'
        $('#table-shopee').DataTable().ajax.url(url).load()
    })

    $('#tandabaca').click(function () {
        url = '/shopee/search/tandabaca'
        $('#table-shopee').DataTable().ajax.url(url).load()
    })

    $('#removemot').click(function () {
        url = '/shopee/search/removemot'
        $('#table-shopee').DataTable().ajax.url(url).load()
    })

    var table = $('#table-shopee').DataTable({
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
                title: 'Gambar',
                data: 'image',
                name: 'image',
                render: function (data, type, full, meta) {
                    return "<img src='" + data + "' width='100' class='img-thumbnail' />";
                },
                orderable: false
            },
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
        ]
    });

    $('#name').change(function () {
        var column = table.column(1);
        column.visible(!column.visible());
    })

    $('#price').change(function () {
        var column = table.column(2);
        column.visible(!column.visible());
    })

    $('#rating').change(function () {
        var column = table.column(3);
        column.visible(!column.visible());
    })

    $('#description').change(function () {
        var column = table.column(4);
        column.visible(!column.visible());
    })

})