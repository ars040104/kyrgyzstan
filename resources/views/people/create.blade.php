<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Добавить человека</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
/* ==========================================================================
   1. Reset & Core Setups
   ========================================================================== */
*, *::before, *::after { 
    box-sizing: border-box; 
    margin: 0; 
    padding: 0; 
}

:root {
    --bg:          #f4f5f7;
    --surface:     #ffffff;
    --surface-2:   #fcfcfc;
    --border:      #e2e8f0;
    --border-focus:#2d2d2d;
    --text:        #0f172a;
    --text-sub:    #64748b;
    --accent:      #1e293b;
    --accent-h:    #0f172a;
    --error:       #e11d48;
    --error-bg:    #fff5f5;
    --radius:      6px;
    --shadow:      0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 10px 15px -3px rgba(0, 0, 0, 0.08);
    --shadow-sm:   0 1px 2px 0 rgba(0, 0, 0, 0.05);
    --transition:  all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}

body {
    font-family: 'DM Sans', -apple-system, BlinkMacSystemFont, sans-serif;
    background: var(--bg);
    color: var(--text);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 16px;
    -webkit-font-smoothing: antialiased;
}

/* ==========================================================================
   2. Card Layout
   ========================================================================== */
.card {
    background: var(--surface);
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    width: 100%;
    max-width: 480px;
    overflow: hidden;
    border: 1px solid rgba(0, 0, 0, 0.03);
}

.card-header {
    background: var(--accent);
    padding: 32px 36px 28px;
    position: relative;
}

.card-header::after {
    content: '';
    position: absolute;
    bottom: 0; 
    left: 36px;
    width: 32px; 
    height: 4px;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 2px 2px 0 0;
}

h1 {
    font-family: 'Roboto Slab', serif;
    font-size: 22px;
    font-weight: 700;
    color: #ffffff;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

.card-body { 
    padding: 36px; 
}

/* ==========================================================================
   3. Form Fields & Elements
   ========================================================================== */
.field { 
    margin-bottom: 20px; 
}

label {
    display: block;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.5px;
    color: var(--text-sub);
    margin-bottom: 8px;
}

input, select {
    width: 100%;
    padding: 12px 14px;
    border: 1px solid var(--border);
    border-radius: var(--radius);
    font-size: 15px;
    font-family: inherit;
    color: var(--text);
    background: var(--surface-2);
    transition: var(--transition);
    appearance: none;
    -webkit-appearance: none;
}

input::placeholder { 
    color: #94a3b8; 
}

/* Dropdown styling */
select {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%2364748b' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 14px center;
    padding-right: 40px;
    cursor: pointer;
}

/* ==========================================================================
   4. States & Validation
   ========================================================================== */
input:focus, select:focus {
    outline: none;
    border-color: var(--border-focus);
    background: var(--surface);
    box-shadow: 0 0 0 3px rgba(30, 41, 59, 0.1);
}

input.is-invalid, select.is-invalid {
    border-color: var(--error);
    background-color: var(--error-bg);
}

input.is-invalid:focus, select.is-invalid:focus {
    box-shadow: 0 0 0 3px rgba(225, 29, 72, 0.15);
}

select:disabled { 
    opacity: 0.6; 
    cursor: not-allowed; 
    background-color: var(--bg);
}

.error-msg {
    color: var(--error);
    font-size: 13px;
    font-weight: 500;
    margin-top: 6px;
    display: flex;
    align-items: center;
    gap: 6px;
}

.error-msg::before {
    content: "";
    display: inline-block;
    width: 14px; 
    height: 14px;
    flex-shrink: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23e11d48' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Ccircle cx='12' cy='12' r='10'/%3E%3Cline x1='12' y1='8' x2='12' y2='12'/%3E%3Cline x1='12' y1='16' x2='12.01' y2='16'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: center;
}

/* ==========================================================================
   5. Helpers & Structural Pieces
   ========================================================================== */
.divider {
    height: 1px;
    background: var(--border);
    margin: 8px 0 24px;
}

/* ==========================================================================
   6. Buttons & Navigation Links
   ========================================================================== */
button[type="submit"] {
    width: 100%;
    padding: 14px;
    background: var(--accent);
    color: #ffffff;
    border: none;
    border-radius: var(--radius);
    font-size: 14px;
    font-weight: 600;
    font-family: inherit;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    cursor: pointer;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
}

button[type="submit"]:hover {
    background: var(--accent-h);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

button[type="submit"]:active { 
    transform: scale(0.98); 
}

.back-link {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    margin-top: 24px;
    color: var(--text-sub);
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    transition: var(--transition);
}

.back-link:hover { 
    color: var(--border-focus); 
}

.back-link::before {
    content: "";
    display: inline-block;
    width: 16px;
    height: 16px;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2364748b' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cline x1='19' y1='12' x2='5' y2='12'/%3E%3Cpolyline points='12 19 5 12 12 5'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: center;
    transition: var(--transition);
}

.back-link:hover::before {
    transform: translateX(-2px);
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%230f172a' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cline x1='19' y1='12' x2='5' y2='12'/%3E%3Cpolyline points='12 19 5 12 12 5'/%3E%3C/svg%3E");
}
    </style>
</head>
<body>
<div class="card">
    <div class="card-header">
        <h1>Добавить человека</h1>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('person.store') }}" autocomplete="off">
            @csrf

            <div class="field">
                <label>ФИО</label>
                <input type="text" name="name" value="{{ old('name') }}"
                       placeholder="Orozalieva Kamila"
                       class="{{ $errors->has('name') ? 'is-invalid' : '' }}">
                @error('name') <div class="error-msg">{{ $message }}</div> @enderror
            </div>

            <div class="field">
                <label>ИНН</label>
                <input type="text" name="inn" value="{{ old('inn') }}"
                       placeholder="12345678901234" maxlength="14"
                       class="{{ $errors->has('inn') ? 'is-invalid' : '' }}">
                @error('inn') <div class="error-msg">{{ $message }}</div> @enderror
            </div>

            <div class="field">
                <label>Номер паспорта</label>
                <input type="text" name="passport" value="{{ old('passport') }}"
                       placeholder="AN1234567" maxlength="9"
                       class="{{ $errors->has('passport') ? 'is-invalid' : '' }}">
                @error('passport') <div class="error-msg">{{ $message }}</div> @enderror
            </div>

            <div class="divider"></div>

            <div class="field">
                <label>Область</label>
                <select name="oblast_id" id="oblast_select"
                        class="{{ $errors->has('oblast_id') ? 'is-invalid' : '' }}">
                    <option value="">— Выберите область —</option>
                    @foreach($oblasts as $oblast)
                        <option value="{{ $oblast->id }}"
                            {{ old('oblast_id') == $oblast->id ? 'selected' : '' }}>
                            {{ $oblast->name }}
                        </option>
                    @endforeach
                </select>
                @error('oblast_id') <div class="error-msg">{{ $message }}</div> @enderror
            </div>

            <div class="field">
                <label>Район</label>
                <select name="rayon_id" id="rayon_select" disabled
                        class="{{ $errors->has('rayon_id') ? 'is-invalid' : '' }}">
                    <option value="">— Сначала выберите область —</option>
                    @foreach($rayons as $rayon)
                        <option value="{{ $rayon->id }}" data-oblast="{{ $rayon->id_oblast }}">
                            {{ $rayon->name }}
                        </option>
                    @endforeach
                </select>
                @error('rayon_id') <div class="error-msg">{{ $message }}</div> @enderror
            </div>

            <button type="submit">Сохранить</button>
        </form>

        <a href="/people" class="back-link">Назад к списку</a>
    </div>
</div>

<script>
    const oblastSelect = document.getElementById('oblast_select');
    const rayonSelect  = document.getElementById('rayon_select');
    const allOptions   = Array.from(rayonSelect.options);

    // Restore rayon on validation error (old value)
    const oldOblast = '{{ old('oblast_id') }}';
    const oldRayon  = '{{ old('rayon_id') }}';

    function filterRayons(oblastId, preselect = null) {
        rayonSelect.innerHTML = '';
        rayonSelect.disabled = true;

        if (!oblastId) {
            rayonSelect.add(new Option('— Сначала выберите область —', ''));
            return;
        }

        const filtered = allOptions.filter(o => o.dataset.oblast === oblastId);
        rayonSelect.add(new Option('— Выберите район —', ''));
        filtered.forEach(o => {
            const opt = new Option(o.text, o.value);
            if (preselect && o.value === preselect) opt.selected = true;
            rayonSelect.add(opt);
        });
        rayonSelect.disabled = false;
    }

    // On page load: restore state after failed validation
    if (oldOblast) filterRayons(oldOblast, oldRayon);

    oblastSelect.addEventListener('change', function () {
        filterRayons(this.value);
    });
</script>
</body>
</html>
