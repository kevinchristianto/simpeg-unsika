/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  App's functionality JS
 *
 * ---------------------------------------------------------------------------- */

$(document).ready(function () {
    $('.datatable-basic').DataTable({
        autoWidth: false,
        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
        language: {
            search: '<span>Filter:</span> _INPUT_',
            lengthMenu: '<span>Show:</span> _MENU_',
            paginate: { 'first': 'First', 'last': 'Last', 'next': '→', 'previous': '←' }
        }
    })

    $('.modal').on('shown.bs.modal', function () {
        $(this).find('input[type=text]').first().focus()
    })

    // Add active class to submenu's parent
    $('.nav-item-submenu').filter(function () {
        return ($(this).find('a.active').length > 0)
    }).addClass('nav-item-open').find('.nav-link').first().addClass('active').next().css('display', 'block')
})