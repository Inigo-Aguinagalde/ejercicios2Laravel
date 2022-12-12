<form action="{{route('fimlValidation')}}" method="POST">
        @csrf
        <p><input type="hidden" name="id" /></p>
        <p>nombre <input type="text" name="nombre" value="{{ old('nombre') }}" /></p>
        @error('nombre')
        <div style="color: red;">{{$message}}</div>  
        @enderror
        <p>Director <input type="text" name="director" value="{{ old('director') }}" /></p>
        @error('director')
        <div style="color: red;">{{$message}}</div>
        @enderror
        <p>Actor principal 1 <input type="text" name="actor1" value="{{ old('actor1') }}"/></p>
        @error('actor1')
        <div style="color: red;">{{$message}}</div>
        @enderror
        
        <p>Actor principal 2 <input type="text" name="actor2" value="{{ old('actor2') }}"/></p>
        @error('actor2')
        
        @enderror
        
        <p>Fecha publicacion <input type="date" name="fecha" value="{{ old('fecha') }}"/></p>
        @error('fecha')
        <div style="color: red;">{{$message}}</div>
        @enderror
        <label for="genero" >Genero:</label>
        <select id="genero" name="genero" value="{{ old('genero') }}">
            <option value=""></option>
            <option value="Terror">Terror</option>
            <option value="Accion">Accion</option>
            <option value="Fantasia">Fantasia</option>
            <option value="Drama">Drama</option>
            <option value="Comedia">Comedia</option>
        </select>
        @error('genero')
        <div style="color: red;">{{$message}}</div>
        @enderror
        <input type="submit" />
    </form>