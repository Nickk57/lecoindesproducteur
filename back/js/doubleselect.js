
    window.addEventListener('load', () => {
        const cat = document.getElementById('id_subcategproduct');
        const sc = document.getElementById('id_producteur');
        cat.addEventListener('change', () => {
            sc.disabled = true;
            $.get('ajout_product.php', {
                identCat: cat.value
            }).done((selectdobule) => {
                sc.innerHTML = '';
                JSON.parse(selectdobule).forEach((e) => {
                    let option = document.createElement('option');
                    option.text = e.ident_sous_cat;
                    option.value = e.ident_sous_cat;
                    let txt = document.createTextNode(e.sub_category);
                    subcat.appendChild(txt);
                    sc.appendChild(subcat);
                });
                if (cat.value == 'selectionnez la categorie') {
                    sc.disabled = true;
                    let opt = document.createElement('option');
                    opt.innerHTML = 'selectionnez la sous-categorie';
                    sc.appendChild(opt);
                }
                else {
                    sc.disabled = false;
                }
            });
        });
    });
