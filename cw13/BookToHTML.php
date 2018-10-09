<?php
require_once 'Book.php';
class BookToHTML {

    public static function ToTable(array $dane) {
        $html = "<table>\n";
        $html .= "<tr><th>Lp</th><th>Tutuł</th>"
                . "<th>Autor</th><th>Strony</th>"
                . "<th>Opis</th></tr>\n";
        $lp = 0;
        foreach ($dane as $b) {
            $html .= "<tr>\n"
                    . "<td>" . ( ++$lp) . "</td>"
                    . "<td>{$b->getTitle()}</td>"
                    . "<td>{$b->getAuthor()}</td>"
                    . "<td>{$b->getPages()}</td>"
                    . "<td>{$b->getDescription()}</td>"
                    . "</tr>\n";
        }
        return $html."</table>\n";
    }
    public static function BookToForm(Book $book=null, $id=-1){
        $b = $book!=null ? $book : new Book("","",0,"");
        $html=<<<TEXT
         <form action="addBook.php" method="post">
            <fieldset>
                <input type='hidden' value='{$id}'/>
                <div class="line">
                    <label for="title">Tytuł</label>
                    <input type="text" id="title" name="title"
                         value='{$b->getTitle()}'/>
                </div>
                <div class="line">
                    <label for="author">Autor</label>
                    <input type="text" id="author" name="author" 
                        value='{$b->getAuthor()}'/>
                </div>
                <div class="line">
                    <label for="pages">Ilość stron</label>
                    <input type="number" id="pages" name="pages" 
                        value='{$b->getPages()}'/>
                </div>
                <div class="line">
                    <label for="description">Ilość stron</label>
                    <textarea id="description" name="description">
                        {$b->getDescription()}
                    </textarea>
                </div>
                <input type="submit" value="Zapisz"/>
            </fieldset>
        </form>        
TEXT;
        return $html;
    }
}
