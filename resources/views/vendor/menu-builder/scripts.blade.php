<script>
    var menus = {
        "oneThemeLocationNoMenus": "",
        "moveUp": '{{__("menu-builder::messages.move_up")}}',
        "moveDown": '{{__("menu-builder::messages.move_down")}}',
        "moveToTop": '{{__("menu-builder::messages.move_top")}}',
        "moveUnder": '{{__("menu-builder::messages.move_under")}}',
        "moveOutFrom": '{{__("menu-builder::messages.move_out_from")}}',
        "under": '{{__("menu-builder::messages.under")}}',
        "outFrom": '{{__("menu-builder::messages.out_from")}}',
        "menuFocus": '{{__("menu-builder::messages.menu_focus")}}',
        "deleteMenu": '{{__("menu-builder::messages.deleting_this_menu")}}',
        "enterMenuName": '{{__("menu-builder::messages.enter_menu_name")}}'
    };
    var arraydata = [];
    var addcustommenur = '{{ route("admin.haddCustomMenu") }}';
    var updateitemr = '{{ route("admin.hupdateItem")}}';
    var generatemenucontrolr = '{{ route("admin.hgenerateMenuControl") }}';
    var deleteitemmenur = '{{ route("admin.hdeleteItemMenu") }}';
    var deletemenugr = '{{ route("admin.hdeletemenug") }}';
    var createnewmenur = '{{ route("admin.hcreateNewMenu") }}';
    var csrftoken = "{{ csrf_token() }}";
    var menuwr = "{{ url()->current() }}";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrftoken
        }
    });
</script>
<script type="text/javascript" src="{{asset('vendor/menu-builder/scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/menu-builder/scripts2.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/menu-builder/menu.js')}}"></script>