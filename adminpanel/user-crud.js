$('document').ready(function(){
    let name = $('#name');
    let email = $('#email');
    let role = $('#role');
    // $('.edit').on('click', function(e){
    //     e.preventDefault();
    //     let user_id = $(this).attr('data-id');
        
    //     $.ajax({
    //         url : 'edituser.php',
    //         method : 'POST',
    //         data : {
    //             user_id : user_id
    //         },
    //         success : function(data){
    //             console.log(data)
    //             let product = JSON.parse(data);
    //             add_product_modal.modal('show');
                
    //         }
    //     })
    // })

    // Delete Product
    $('.delete').on('click', function(e){
        e.preventDefault();
        let del_id = $(this).attr('data-id');
        $.ajax({
            url : 'deleteuser.php',
            method : "POST",
            data : {
                del_id : del_id
            },
            success : function(data){
                console.log(data);
                alert(data);
                window.location.href = 'users.php';
            }
        })

    })



})