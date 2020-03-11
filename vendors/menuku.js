
$(document).ready(function() {

    var pesan = "<?php echo $this->session->flashdata('pesan');?>";
        modalpesan(pesan);
    
    setTimeout(function() {
        $("li.nav-item.active").trigger('click');
    },10);

});

var menu = $("ul#menu").find("li");
    menu.each(function(index, el) {

        menu[index].onclick =function(){

            $("div#konten").html("<div class='loadingpage'><br><img src='<?php echo site_url('vendors/loading/ajax-loader.gif')?>' /><div style='color:#555;'>Please wait . . .</div></div>");

            var a = $("ul#menu").find("li.nav-item.active");
            a.attr('class', 'nav-item');

            this.setAttribute('class', 'nav-item active');

            var target = this.getAttribute("link");   
    
            $("div#konten").load(target);

        };

    });

function modalpesan(pesan){
    if(pesan == "sukses"){

        $("div#success").modal("show");

    }else if (pesan == "gagal") {

        $("div#error").modal("show");

    }

}