
const allBooks = document.querySelectorAll(".box-of-book");


function makeAllUnclickable () {

    allBooks.forEach(book=> {
        book.style.pointerEvents= "none";
    })
}

allBooks.forEach(book=> {

    book.addEventListener("click",()=>{

        book.classList.add("choosen-Book");
        makeAllUnclickable();
    })
});

