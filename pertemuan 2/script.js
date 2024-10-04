

let a = "budi"
var b =  1234

// pengkondisian 
if (a == "budi") {
    console.log("benar")
}else{
    console.log("salah")
}


console.log(a, b)
// javascript standart
var x = document.getElementById('button')
// jquery
var x_jquery = $("button") 



// latihan 1 

$(document).ready(function(){
    $("#tombol").click(function(){
        $(this).after('<p>sedang belajar jquery</p>')
    })
})


// latihan 2
$(document).ready(function () { 
    $("#tombol_hide").click(function(){
        $("h1").hide()
    })
    $("#tombol_show").click(function(){
        $("#header").show()
    })
})
