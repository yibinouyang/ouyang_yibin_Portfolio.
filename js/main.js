let navbtn = document.getElementById("slide_button");
    navbtn.addEventListener("click",slide_nav);
    function slide_nav(){
        var display = document.getElementById("mainNav").style.display;
        if (display == 'none') {
            document.getElementById("mainNav").style.display = 'block';
        } else {
            document.getElementById("mainNav").style.display = 'none';
        }
        
    }

(() => {
   
    console.log("fired");
    
    const seeMoreButtons = document.querySelectorAll('.see_more'),
        popOver = document.querySelector(".popover"); 


    function fetchData() {
        let targetElement = this,
            url = `./includes/connect.php?id=${this.dataset.target}`;

        fetch(url)
        .then(res => res.json())
        .then(data => {
            console.log(data);
            buildData(data, targetElement);
        })
         .catch((err) => console.log(err));
    }

    function buildData(studentdata, el) {
        popOver.querySelector(".name").textContent= studentdata.name;
        popOver.querySelector(".collage").textContent = studentdata.collage;
        popOver.querySelector(".major").textContent = studentdata.major;
        popOver.querySelector(".hobbies").textContent = studentdata.habbies;

       popOver.classList.add('show-popover');

       el.appendChild(popOver);
    }

    seeMoreButtons.forEach(el => el.addEventListener("click", fetchData));
})();