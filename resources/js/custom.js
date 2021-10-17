    $(function() {

        src = '{{ route("home") }}'

        // window.location.href = "{{URL::to('restaurants/20')}}"
        // window.location.href = "<?php echo URL::to('restaurants/20'); ?>";

        //alert('test file ready')

        /*
                        ================================                    ========================================
                                                                  SITE              
                        ================================                    ==========================================
                        */





        // })

        /*
        ================================                     ========================================
                                            PLATAFORMA
         ================================                    ==========================================
        */

        /***********************************scripts modal login register*********************** */

        //location.replace("{{ route('delivery') }}?id="+id);  dashboard-home
        // <a href="{{ route('home') }}"> 
        // $("#btn-login").on(function() {

        // alert('test btn login');
        /*console.log("inside in btn-login")
        var url = "{{ route('dashboard-home') }}"
        window.location.href = url;*/
        // })

        $('#btn-login').click(function(e) {

            var routeName = 'dashboard-home'
            var url = '/area-cliente';
            window.location.href = routeName
                //console.log(url)
        });


    })