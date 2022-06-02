<div class="search" id="search">
<div class="container">
    <form action="./search.php" method="GET">
        <select name="type" id="type">
            <option value="" disabled selected>Type</option>
            <option value="apartment">Apartment</option>
            <option value="villa">Villa</option>
            <option value="flat">Flat</option>
            <option value="house">House</option>
        </select>
        <input type="text" name="location" id="location" placeholder="Location">
        <input type="number" name="min" id="" placeholder="Min Price">
        <input type="number" name="max" id="" placeholder="Max Price">
        <input type="submit" value="SEARCH" name="submit" class="btn btn-secondary">
    </form>
</div>
</div>