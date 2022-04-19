<?php


if (!isset($_SESSION['login_user']))
    session_start();

include 'cfg.php';

function ListaPodstron($link)
{
    if (isset($_SESSION)) {

        $query = "SELECT * FROM page_list LIMIT 100";
        $result = mysqli_query($link, $query);

        echo '<table class="page_list">';
        while ($row = mysqli_fetch_array($result)) {
            echo '
                    <tr><td class="list-id">' . $row['id'] . '</td><td>' . $row['page_title'] . '
                    <td><a class="edit" href="cms.php?id_edit=' . $row['id'] . '">Edytuj</a></td>
                    <td><a class="delete" href="cms.php?id_delete=' . $row['id'] . '">Usuń</a></td>
                    <tr><td colspan="4"><hr></hr></td></tr>
                ';
        }
        echo '</table>';
    } else echo "Funkcjonalność dostępna wyłącznie po zalogowaniu";
}

function EdytujPodstrone($id)
{
    $id_clear = htmlspecialchars($id);
    $_SESSION['id_edit'] = $id_clear;
    header('Location: edit.php');
}


function UsunPodstrone($id, $link)
{
    $id_clear = htmlspecialchars($id);
    $query = "SELECT * FROM page_list WHERE id = $id LIMIT 1";
    $page_info = mysqli_query($link, $query);
    $page_info = mysqli_fetch_array($page_info);
    $title = $page_info[1];

    $query_delete = "DELETE FROM page_list WHERE id=$id_clear LIMIT 1";

    if ($delete = mysqli_query($link, $query_delete)) {
        echo '
                <script type="text/javascript">
                    window.alert("Usunięto stronę ' . $title . '")
                </script>
                ';
    } else {
        echo '
                <script type="text/javascript">
                    window.alert("Wystąpił błąd przy próbie usunięcia strony nr ' . $title . '")
                </script>
                ';
    }
}

function ListaKategorie($link)
{
    if(isset($_SESSION)){

        $queryMother="SELECT * FROM kategorie WHERE kategoria IS NULL LIMIT 100";
        $resultMother = mysqli_query($link, $queryMother);

        echo '<table class="category_list">';
        while($rowMother = mysqli_fetch_array($resultMother)){
            echo '
                <tr>
                <td>'.$rowMother['nazwa'].'</td>
                <td><a class="edit" href="cms.php?id_edit_category='.$rowMother['id'].'">Edytuj</a></td>
                <td><a class="delete" href="cms.php?id_delete_category='.$rowMother['id'].'">Usuń</a></td>
                </tr>
                <tr><td colspan="3"><hr></hr></td></tr>
            ';
            $mother = $rowMother['nazwa'];
            $querySubCategories="SELECT * FROM kategorie WHERE kategoria='$mother' LIMIT 100";
            $resultSubCategories=mysqli_query($link, $querySubCategories);
            echo '<tr><td></td>';
            echo '<td colspan="3">';
            echo '<table class="category_list">';
            while($rowSubCategories = mysqli_fetch_array($resultSubCategories)){
                echo '
                <tr>
                <td>'.$rowSubCategories['nazwa'].'
                <td><a class="edit" href="cms.php?id_edit_category='.$rowSubCategories['id'].'">Edytuj</a></td>
                <td><a class="delete" href="cms.php?id_delete_category='.$rowSubCategories['id'].'">Usuń</a></td>
                </tr>
                <tr><td colspan="3"><hr></hr></td></tr>
                ';
            }
            echo '</td>';
            echo '</tr>';
            echo '</table>';
        }
        echo '</table>';
    }
    else echo "Funkcjonalność dostępna wyłącznie po zalogowaniu";
}

function ListaProdukty($link)
{
    if (isset($_SESSION)) {

        $query = "SELECT * FROM produkty LIMIT 100";
        $result = mysqli_query($link, $query);

        echo '<table class="page_list">';
        echo '<tr><th>ID</th><th>NAZWA</th><th>KATEGORIA</th><th>CENA NETTO</th><th>ILOŚĆ DOSTĘPNYCH SZTUK</th></tr>';
        while ($row = mysqli_fetch_array($result)) {
            echo '
                    <tr><td class="list-id">' . $row['id'] . '</td><td>' . $row['nazwa'] . '</td><td>' . $row['kategoria'] . '</td>
                    <td>' . $row['cena_netto'] . '</td><td>' . $row['sztuk'] . '</td>
                    <td><a class="edit" href="cms.php?id_edit_product=' . $row['id'] . '">Edytuj</a></td>
                    <td><a class="delete" href="cms.?id_delete_product=' . $row['id'] . '">Usuń</a></td>
                    <tr><td colspan="7"><hr></hr></td></tr>
                ';
        }
        echo '</table>';
    } else echo "Funkcjonalność dostępna wyłącznie po zalogowaniu";
}

function UsunKategorie($id, $link)
{
    $id_clear = htmlspecialchars($id);

    $query = "SELECT * FROM kategorie WHERE id = $id LIMIT 1";
    $category_info_query = mysqli_query($link, $query);
    $category_info = mysqli_fetch_array($category_info_query);
    $name = $category_info[1];

    $query_delete = "DELETE FROM kategorie WHERE id=$id_clear LIMIT 1";

    if ($delete = mysqli_query($link, $query_delete)) {
        echo '
                <script type="text/javascript">
                    window.alert("Usunięto kategorię ' . $name . '")
                </script>
                ';
    } else {
        echo '
                <script type="text/javascript">
                    window.alert("Wystąpił błąd przy próbie usunięcia kategorii ' . $name . '")
                </script>
                ';
    }
}

function EdytujKategorie($id)
{
    $id_clear = htmlspecialchars($id);
    $_SESSION['id_edit_category'] = $id_clear;
    header('Location: edit_cat.php');
}

function EdytujProdukt($id)
{
    $id_clear = htmlspecialchars($id);
    $_SESSION['id_edit_product'] = $id_clear;
    header('Location: edit_prod.php');
}


function UsunProdukt($id, $link)
{
    $id_clear = htmlspecialchars($id);

    $query = "SELECT * FROM produkty WHERE id = $id LIMIT 1";
    $product_info_query = mysqli_query($link, $query);
    $product_info = mysqli_fetch_array($product_info_query);
    $name = $product_info[1];

    $query_delete = "DELETE FROM produkty WHERE id=$id_clear LIMIT 1";

    if ($delete = mysqli_query($link, $query_delete)) {
        echo '
                <script type="text/javascript">
                    window.alert("Usunięto prokudkt ' . $name . '")
                </script>
                ';
    } else {
        echo '
                <script type="text/javascript">
                    window.alert("Wystąpił błąd przy próbie usunięcia kategorii ' . $name . '")
                </script>
                ';
    }
}



if (isset($_GET['id_edit'])) {
    EdytujPodstrone($_GET['id_edit'], $link);
}
if (isset($_GET['id_delete'])) {
    UsunPodstrone($_GET['id_delete'], $link);
}
if (isset($_GET['id_edit_category'])) {
    EdytujKategorie($_GET['id_edit_category'], $link);
}
if (isset($_GET['id_delete_category'])) {
    UsunKategorie($_GET['id_delete_category'], $link);
}
if (isset($_GET['id_edit_product'])) {
    EdytujProdukt($_GET['id_edit_product'], $link);
}
if (isset($_GET['id_delete_product'])) {
    UsunProdukt($_GET['id_delete_product'], $link);
}
?>
</body>

</html>