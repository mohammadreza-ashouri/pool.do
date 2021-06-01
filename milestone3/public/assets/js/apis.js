"use strict"

$(document).ready(function() {
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