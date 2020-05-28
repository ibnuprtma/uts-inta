$(document).ready(function () {

    url = '/tokopedia/search/none'
    


    $('#tokenizing').click(function () {
        url = '/tokopedia/search/tokenizing'
        $('#table-tokopedia').DataTable().ajax.url(url).load()
    })

    $('#stemming').click(function () {
        url = '/tokopedia/search/stemming'
        $('#table-tokopedia').DataTable().ajax.url(url).load()
    })

    $('#case-folding').click(function () {
        url = '/tokopedia/search/case-folding'
        $('#table-tokopedia').DataTable().ajax.url(url).load()
    })

    $('#stopword').click(function () {
        url = '/tokopedia/search/stopword'
        $('#table-tokopedia').DataTable().ajax.url(url).load()
    })

    $('#katatanya').click(function () {
        url = '/tokopedia/search/katatanya'
        $('#table-tokopedia').DataTable().ajax.url(url).load()
    })

    $('#tandabaca').click(function () {
        url = '/tokopedia/search/tandabaca'
        $('#table-tokopedia').DataTable().ajax.url(url).load()
    })

    $('#removemot').click(function () {
        url = '/tokopedia/search/removemot'
        $('#table-tokopedia').DataTable().ajax.url(url).load()
    })

    var table = $('#table-tokopedia').DataTable({
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
                data: 'image_url_700',
                name: 'image_url_700',
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