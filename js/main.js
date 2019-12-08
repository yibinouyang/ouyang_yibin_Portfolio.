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
            buildPopover(data, targetElement);
        })
        .catch((err) => console.log(err));
    }

    function buildPopover(studentdata, el) {
        popOver.querySelector(".name").textContent = `name: ${studentdata.name}`;
        popOver.querySelector(".collage").textContent = `collage: ${studentdata.collage}`;
        popOver.querySelector(".major").textContent = `collage: ${studentdata.major}`;
        popOver.querySelector(".habbies").textContent = `collage: ${studentdata.habbies}`;

       popOver.classList.add('show-popover');

       el.appendChild(popOver);
    }

    seeMoreButtons.forEach(el => el.addEventListener("click", fetchData));
})();