<html>
    <head>
    <body>
        <form>
            <table>
                <tr>
                    <td>
                        Bib Level
                    </td>
                    <td>
                        <select name="bib">
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                        </select>
                    </td>
                    <td>
                        Material Level
                    </td>
                    <td>
                        <select name="material">
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                        </select>
                    </td>
                    <td>
                        Documents
                    </td>
                    <td>
                        <select name="Document">
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                            <option value="">-select-</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        ISBN
                    </td>
                    <td>
                        <input type="text"  name="isbn" style="width:250px " placeholder="Enter ISBN">
                    </td>
                </tr>
                <tr><td>
                    Author
                    </td>
                    <td>
                        <input type="text"  name="author" style="width:250px" placeholder="Enter Author">
                    </td>
                </tr>
                <tr>
                    <td>
                        Title
                    </td>
                    <td>
                        <input type="text"  name="title" style="width:250px" placeholder="Enter Title">
                    </td>
                </tr>
                <tr>
                    <td>
                        Search option
                    </td>
                    <td>
                        <input type="Radio" id="gende" name="gender"  value="Start with" >Start with
                         <input type="Radio" id="gender" name="gender"  value="Full Title" >Full Title
                         <input type="Radio" id="gender" name="gender"  value="Any Word" >Any Word
                    </td>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <input type="Radio" id="gender" name="gender"  value="End With" >End With
                        <input type="Radio" id="gender" name="gender"  value="Like" >Like
                        <input type="Radio" id="gender" name="gender"  value="All Words" >All words
                    </td>
                </tr>
            </table>
        </form>
    </body>
    </head>
</html>