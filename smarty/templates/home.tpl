{extends file="standardPage.tpl"}
{block name="content"}
    <h2>Voyage 284: sub voyages</h2>
    <table id="resultTable">
        <tr>
            <th>Code</th>
            <th>Departure date</th>
            <th>Vessel</th>
            <th>Captain</th>
            <th>From</th>
            <th>To</th>
            <th></th>
            <th>+</th>
        </tr>
        <tr class="even">
            <td class="sea">V1</td>
            <td>??/??/1735</td>
            <td>The Black Rock</td>
            <td>Captain Hook</td>
            <td>Batavia</td>
            <td>Calcutta</td>
            <td><a href="editor.php"><img src="{$home_path}img/edit.png" height="16px" width="16px"></a></td>
            <td><a href="" title="Delete profile"><img src="{$home_path}img/bin.png" height="16px" width="16px"></a>
            </td>
        </tr>
        <tr class="even">
            <td class="sea">V2</td>
            <td>??/??/1735</td>
            <td>Ye Olde Barke</td>
            <td>John Davies</td>
            <td>Shanghai</td>
            <td>Macao</td>
            <td><a href="editor.php"><img src="{$home_path}img/edit.png" height="16px" width="16px"></a></td>
            <td><a href="" title="Delete profile"><img src="{$home_path}img/bin.png" height="16px" width="16px"></a>
            </td>
        </tr>
        <tr class="even">
            <td class="sea">V3</td>
            <td>??/??/1735</td>
            <td>The Bleak Housewive</td>
            <td>David Jefferies</td>
            <td>Hanoi</td>
            <td>Hué</td>
            <td><a href="editor.php"><img src="{$home_path}img/edit.png" height="16px" width="16px"></a></td>
            <td><a href="" title="Delete profile"><img src="{$home_path}img/bin.png" height="16px" width="16px"></a>
            </td>
        </tr>
        <tr class="even">
            <td class="noSeaNorLand">V4</td>
            <td>??/??/1735</td>
            <td>De Gulden Draeck</td>
            <td>Harrie Smit</td>
            <td>Batavia</td>
            <td>Poulo Condore</td>
            <td><a href="editor.php"><img src="{$home_path}img/edit.png" height="16px" width="16px"></a></td>
            <td><a href="" title="Delete profile"><img src="{$home_path}img/bin.png" height="16px" width="16px"></a>
            </td>
        </tr>
        <tr class="even">
            <td class="sea">V5</td>
            <td>??/??/1735</td>
            <td>Molly</td>
            <td>Jeff Bevis</td>
            <td>London</td>
            <td>Pinang</td>
            <td><a href="editor.php"><img src="{$home_path}img/edit.png" height="16px" width="16px"></a></td>
            <td><a href="" title="Delete profile"><img src="{$home_path}img/bin.png" height="16px" width="16px"></a>
            </td>
        </tr>
    </table>
    <br/>
    <h2>Dependencies</h2>
    <table id="dependencyTable">
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <div id="dashBoard">
        <input type="button" value="Add row" onclick="addRow()"/>
        <input type="button" value="Add column" onclick="addCol()"/>
    </div>
{/block}