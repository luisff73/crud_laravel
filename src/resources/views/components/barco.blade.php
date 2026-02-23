@props(['title', 'barco'])

<div class="barco" style="border: 3px solid #5965cd; border-radius: 8px; padding: 15px; text-align: center">
    @isset($title)
        <h2 class="card-title">{{ $title }}</h2>
    @endisset

    <div class="card-body">
        {{ $slot }}
    
  <div style="display: flex; justify-content: space-around; gap: 10px; margin-top: 15px; flex-wrap: wrap;">

        <form action="{{ route('barcos.eliminar', $barco) }}" method="POST" onsubmit="return confirm('¿Estás seguro?');" style="flex: 1;">
            @csrf
            @method('DELETE')

            <button type="submit" style="
                background-color: #e3342f; 
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
                font-weight: bold;
                display: block; 
                width: 100%;   
                text-align: center;
                min-width: 120px;
                border: none;  
                cursor: pointer; 
            ">
                Eliminar barco
            </button>
        </form>

        <form action="{{ route('barcos.update', $barco) }}" method="POST" onsubmit="return confirm('Vas a aumentar la capacidad del barco en 10 pasajeros. ¿Estás seguro?');" style="flex: 1;">
            @csrf
            @method('PUT')

            <button type="submit" style="
                flex: 1; 
                background-color: #5965cd;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
                font-weight: bold;
                display: inline-block;
                text-align: center; 
                min-width: 120px; 
            ">
                Aumentar capacidad
            </button>
        </form>
        </div>
    </div>
</div>
