<?php
include 'header.php';
include 'sidebar.php';
?>


<div class="right">
      <div class="product add">
        <form action="" method="POST">
            <table>
                <tr>
                    <td colspan="2"><h1>PRODUCT ADD</h1></td>
                </tr>
                <tr>
                    <td>
                        <label for="category">Category select <span style="color:tomato">*</span></label>        
                    </td>
                    <td>
                        <label for="brand">Brand select <span style="color:tomato">*</span></label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <select name="category" id="">
                            <option value="#"></option>
                            <option value="">1</option>
                          </select>                    </td>
                    <td>
                        <select name="brand" id="">
                            <option value="#"></option>
                            <option value="">1</option>
                          </select>                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="productName">Product name <span style="color:tomato">*</span></label>
                    </td>

                    <td>
                        <label for="productPrice">Product price <span style="color:tomato">*</span></label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="productName" id="">
                    </td>
                    <td>
                        
                        <input type="text" name="productPrice" id="">
                        <span class="money"> $ </span>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="productDesc">Product description <span style="color:tomato">*</span></label> 
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <textarea name="productDesc" id="" cols="30" rows="10"></textarea>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="">Product image <span style="color:tomato">*</span></label> 
                    </td>
                </tr>

                <tr>
                    <td>
                        <input multiple type="file" name="" id="">
                    </td>
                </tr>
            </table>
          
          <button type="submit">Add</button>
        </form>
      </div>
    </div>
  </section>
</body>
</html>