<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Список людей</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
    /* ==========================================================================
   1. System Reset & Core Context
   ========================================================================== */
*, *::before, *::after { 
    box-sizing: border-box; 
    margin: 0; 
    padding: 0; 
}

:root {
    /* Semantic Palette */
    --canvas-bg:     #f8fafc;
    --panel-bg:      #ffffff;
    --panel-bg-alt:  #fdfdfd;
    --panel-hover:   #f1f5f9;
    --stroke:        #e2e8f0;
    
    /* Typography Palette */
    --text-main:     #0f172a;
    --text-muted:    #64748b;
    --text-invert:   #ffffff;
    --text-header:   #94a3b8;
    
    /* Branding Elements */
    --brand-main:    #1e293b;
    --brand-dark:    #0f172a;
    --success-base:  #10b981;
    --success-bg:    #ecfdf5;
    --success-text:  #065f46;
    
    /* Elevation & Radii */
    --radius-md:     6px;
    --radius-sm:     4px;
    --shadow-flat:   0 1px 3px 0 rgba(0, 0, 0, 0.05), 0 1px 2px -1px rgba(0, 0, 0, 0.05);
    --shadow-raised: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 10px 15px -3px rgba(0, 0, 0, 0.05);
    
    /* Motion */
    --easing-std:    all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}

body {
    font-family: 'DM Sans', -apple-system, BlinkMacSystemFont, sans-serif;
    background-color: var(--canvas-bg);
    color: var(--text-main);
    min-height: 100vh;
    padding: 48px 24px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.container { 
    max-width: 1040px; 
    margin: 0 auto; 
}

/* ==========================================================================
   2. Alert / Flash Feedback
   ========================================================================== */
.flash {
    display: flex;
    align-items: center;
    gap: 12px;
    background-color: var(--success-bg);
    border-left: 4px solid var(--success-base);
    border-radius: var(--radius-sm);
    padding: 14px 20px;
    margin-bottom: 32px;
    font-size: 14px;
    color: var(--success-text);
    font-weight: 500;
    box-shadow: var(--shadow-flat);
}

.flash::before {
    content: "";
    display: inline-block;
    width: 16px;
    height: 16px;
    flex-shrink: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23065f46' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='20 6 9 17 4 12'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: center;
}

/* ==========================================================================
   3. Header Architecture
   ========================================================================== */
.page-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 24px;
    flex-wrap: wrap;
    gap: 20px;
}

.page-title-wrap {
    display: flex;
    align-items: center;
    gap: 16px;
}

.page-title-wrap::before {
    content: '';
    display: block;
    width: 4px; 
    height: 32px;
    background-color: var(--brand-main);
    border-radius: 2px;
    flex-shrink: 0;
}

h1 {
    font-family: 'Roboto Slab', serif;
    font-size: 24px;
    font-weight: 700;
    color: var(--text-main);
    letter-spacing: -0.2px;
}

/* Interactive Action Trigger */
.add-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 20px;
    background-color: var(--brand-main);
    color: var(--text-invert);
    border-radius: var(--radius-md);
    text-decoration: none;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    box-shadow: var(--shadow-flat);
    transition: var(--easing-std);
}

.add-btn::before { 
    content: "";
    display: inline-block;
    width: 14px;
    height: 14px;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23ffffff' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cline x1='12' y1='5' x2='12' y2='19'/%3E%3Cline x1='5' y1='12' x2='19' y2='12'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: center;
}

.add-btn:hover { 
    background-color: var(--brand-dark); 
    box-shadow: var(--shadow-raised);
}

.add-btn:active { 
    transform: scale(0.98); 
}

/* ==========================================================================
   4. Structured Data Display (Table Card)
   ========================================================================== */
.table-card {
    background-color: var(--panel-bg);
    border-radius: var(--radius-md);
    box-shadow: var(--shadow-raised);
    overflow: hidden;
    border: 1px solid var(--stroke);
}

/* Wrapper to enable horizontal structural scrolling if content overruns */
.table-responsive {
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

table { 
    width: 100%; 
    border-collapse: collapse; 
    text-align: left;
}

thead { 
    background-color: var(--brand-main); 
}

thead th {
    padding: 16px 24px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: var(--text-header);
}

thead th:first-child { 
    color: rgba(255, 255, 255, 0.4); 
    width: 64px; 
}

tbody tr {
    border-bottom: 1px solid var(--stroke);
    transition: var(--easing-std);
}

tbody tr:last-child { 
    border-bottom: none; 
}

tbody tr:hover { 
    background-color: var(--panel-hover); 
}

td {
    padding: 16px 24px;
    font-size: 14px;
    color: var(--text-main);
    vertical-align: middle;
}

/* Column Specific Structural Formatting */
td:first-child { 
    color: var(--text-muted); 
    font-size: 13px; 
    font-weight: 600; 
}

td:nth-child(2) { 
    font-weight: 500; 
}

/* Monospaced Data Points (Hashes, Identifiers, UUIDs) */
td:nth-child(3),
td:nth-child(4) {
    font-family: 'SFMono-Regular', Consolas, 'Liberation Mono', Menlo, monospace;
    font-size: 13px;
    color: var(--text-muted);
}

td:nth-child(5),
td:nth-child(6) { 
    font-size: 13px; 
    color: var(--text-muted); 
}

/* Empty State Modifiers */
.empty {
    text-align: center;
    color: var(--text-muted);
    padding: 64px 24px;
    font-size: 15px;
}

.empty::before {
    content: "";
    display: block;
    width: 40px;
    height: 40px;
    margin: 0 auto 16px;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2394a3b8' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: center;
}

/* ==========================================================================
   5. Aggregate Footer / Pagination Anchor
   ========================================================================== */
.table-footer {
    padding: 14px 24px;
    border-top: 1px solid var(--stroke);
    font-size: 12px;
    font-weight: 500;
    color: var(--text-muted);
    background-color: var(--panel-bg-alt);
    text-align: right;
}
</style>
</head>
<body>
<div class="container">

    @if(session('success'))
        <div class="flash">{{ session('success') }}</div>
    @endif

    <div class="page-header">
        <div class="page-title-wrap">
            <h1>Список людей</h1>
        </div>
        <a href="/add" class="add-btn">Добавить человека</a>
    </div>

    <div class="table-card">
        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>ФИО</th>
                <th>ИНН</th>
                <th>Номер паспорта</th>
                <th>Область</th>
                <th>Район</th>
            </tr>
            </thead>
            <tbody>
            @forelse($people as $i => $person)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->inn }}</td>
                    <td>{{ $person->passport }}</td>
                    <td>{{ $person->oblast->name ?? '—' }}</td>
                    <td>{{ $person->rayon->name ?? '—' }}</td>
                </tr>
            @empty
                <tr><td colspan="6" class="empty">Список пуст</td></tr>
            @endforelse
            </tbody>
        </table>
        @if($people->count())
            <div class="table-footer">Всего записей: {{ $people->count() }}</div>
        @endif
    </div>

</div>
</body>
</html>
