"use strict"

$(document).ready(function() {

    if (localStorage.getItem('theme') && localStorage.getItem('theme') == 'y') {
        $('#theme-css').attr('href', "assets/css/theme-dark.css");
        $('#theme-logo').attr('src', 'assets/img/illustrations/pool_logo.png');
    } else {
        $('#theme-css').attr('href', "assets/css/theme.css");
        $('#theme-logo').attr('src', 'assets/img/illustrations/logo.png');
    }

    $('#adjust-theme').on('click', function(e) {

        e.preventDefault();

        if (localStorage.getItem('theme') == 'n' || localStorage.getItem('theme') == null) {
            localStorage.setItem('theme', 'y');
            $('#theme-css').attr('href', "assets/css/theme-dark.css");
            $('#theme-logo').attr('src', 'assets/img/illustrations/pool_logo.png');
        } else {
            localStorage.setItem('theme', 'n');
            $('#theme-css').attr('href', "assets/css/theme.css");
            $('#theme-logo').attr('src', 'assets/img/illustrations/logo.png');
        }

    })

    console.log('theme', localStorage.getItem('theme'));

    $.getJSON('https://api2.chiaexplorer.com/topFarmers?filter=10k', function(data) {
        let table = '';
        data.topFarmers.forEach((value, key) => {

            table += `
                    <tr class="btn-reveal-trigger">
                        <td class="align-left text-left fs-0">
                            <span class="badge badge rounded-capsule badge-soft-success">${value.rank}</span>
                            
                        <th class="align-middle text-center">${value.address}</th>
                        <td class="align-middle text-center">${value.blocks_won}</td>
                        <td class="text-center">${value.blocks_won_24h}</td>
                        </td>
                    </tr>`;
        });
        $('#purchases').html(table)
    })

    $.getJSON('https://api2.chiaexplorer.com/blockchainSummary', function(data) {
        $('#difficulty').html(data.difficulty.toLocaleString())
        $('#addressCount').html(data.addressCount.toLocaleString())

        $('#currentPrice').html(`$${data.price}`)



    })
})