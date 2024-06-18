var count = 0;

var add = document.querySelector(".add");
var min = document.querySelector(".min");

var number = document.querySelector(".ticket")


add.addEventListener('click',()=>{ 
    if(count < 15){ 
        count += 1;
        // console.log(count);
        number.value = `${count}`;
        // console.log(number.value);
    }
})


min.addEventListener("click",()=>{
        if(1 < count){
        count -= 1;
        // console.log(count);
        number.value = `${count}`;
        // console.log(number.value);
    }
})


