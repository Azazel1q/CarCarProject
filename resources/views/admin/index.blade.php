@extends('layouts.app')

@section('title', 'Админ Панель')

@section('content')
<main>
    <div class="container">
        <h1>Добавить машину</h1>
        <form action="">
            <input placeholder="Название" name="title" type="text">
            <input placeholder="Описание" name="decription" type="textarea">
            <input placeholder="Марка" name="marka" type="text">
            <input placeholder="Модель" name="model" type="text">
            <label for="year">Год производства</label>
            <select name="year" id="year">
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
            </select>
            <input placeholder="Коробка передач" name="box" type="text">
            <label for="privod">Привод</label>
            <select name="privod" id="privod">
                <option value="Передний">Передний</option>
                <option value="Задний">Задний</option>
                <option value="Полный">Полный</option>
            </select>
            <input placeholder="Объём двигателя" name="volumn" type="text">
            <input placeholder="Стоимость в сутки" name="price" type="text">
            <input placeholder="Картинки" type="file" multiple>
            <input type="submit" value="Добавить">
        </form>
    </div>
</main>
@endsection