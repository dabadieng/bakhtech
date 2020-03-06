let listeInput = document.querySelectorAll("input[type=checkbox]");
listeInput.forEach(elt => {
    elt.checked = true;
    elt.addEventListener("click", afficheAlltr);
});
console.log(listeInput);

let matable = document.getElementById("contenue");
let listetr = matable.querySelectorAll("tr");

function affichetr(tr, cle) {
    if (tr.className.includes(cle))
        tr.style.display = "table-row";
}

function afficheAlltr(e) {
    listetr.forEach(tr => tr.style.display = "none");

    listeInput.forEach(elt => {
        if (elt.checked) {
            listetr.forEach(tr => {
                affichetr(tr, elt.id);
            });
        }
    });
}

function filtrage() {
    $("#choix").toggle();
}


//order
/************/
//https://www.pierre-giraud.com/trier-tableau-javascript/

const tbody = document.querySelector('tbody');
const thx = document.querySelectorAll('th');
const trxb = tbody.querySelectorAll('tr');
const compare = function (ids, asc) {
    return function (row1, row2) {
        const tdValue = function (row, ids) {
            return row.children[ids].textContent;
        }
        const tri = function (v1, v2) {
            if (v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2)) {
                return v1 - v2;
            } else {
                return v1.toString().localeCompare(v2);
            }
            return v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2);
        };
        return tri(tdValue(asc ? row1 : row2, ids), tdValue(asc ? row2 : row1, ids));
    }
}


thx.forEach(function (th) {
    th.addEventListener('click', function () {
        let classe = Array.from(trxb).sort(compare(Array.from(thx).indexOf(th), this.asc = !this.asc));
        classe.forEach(function (tr) {
            tbody.appendChild(tr)
        });
    })
});


/************** */