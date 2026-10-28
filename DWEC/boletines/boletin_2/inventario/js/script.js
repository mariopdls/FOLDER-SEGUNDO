// ---------- Funciones de inventario del boletín 1 ----------
const inventory = {
    items: [
        { name: 'Laptop', quantity: 5, price: 1200 },
        { name: 'Mouse', quantity: 25, price: 20 },
        { name: 'Keyboard', quantity: 15, price: 50 }
    ],
    totalItems: 0
};

const updateTotal = () => {
    inventory.totalItems = inventory.items.reduce((acum, item) => acum + item.quantity, 0);
};

const addItem = (itemName, quantity, price) => {
    const existing = inventory.items.find(i => i.name === itemName);
    if (existing) {
        existing.quantity += quantity;
    } else {
        inventory.items.push({ name: itemName, quantity, price });
    }
    updateTotal();
};

const removeItem = (itemName) => {
    inventory.items = inventory.items.filter(i => i.name !== itemName);
    updateTotal();
};

updateTotal();

console.log(inventory.totalItems);
console.log(inventory.items.filter(i => i.price > 50).map(i => i.name));
console.log(
    inventory.items
        .filter(i => i.name.toLowerCase().includes('o'))
        .reduce((acum, i) => acum + i.quantity, 0)
);

// ---------- DOM ----------
const form = document.getElementById('addProduct');
const tbody = document.getElementById('items');

const addRow = (item) => {
    const tr = document.createElement('tr');
    if (item.price > 50) tr.classList.add('caro');

    const tdName = document.createElement('td');
    tdName.textContent = item.name;

    const tdQuantity = document.createElement('td');
    tdQuantity.textContent = item.quantity;

    const tdPrice = document.createElement('td');
    tdPrice.textContent = `${item.price.toFixed(2)} €`;

    const tdActions = document.createElement('td');
    const btnDelete = document.createElement('button');
    btnDelete.textContent = 'Eliminar';
    btnDelete.addEventListener('click', () => {
        removeItem(item.name);
        renderTable();
    });
    tdActions.appendChild(btnDelete);

    tr.appendChild(tdName);
    tr.appendChild(tdQuantity);
    tr.appendChild(tdPrice);
    tr.appendChild(tdActions);
    tbody.appendChild(tr);
};

const renderTable = () => {
    tbody.textContent = '';
    inventory.items.forEach(item => addRow(item));
};

form.addEventListener('submit', (e) => {
    e.preventDefault();

    addItem(
        document.getElementById('name').value.trim(),
        Number(document.getElementById('quantity').value),
        Number(document.getElementById('price').value)
    );

    renderTable();
    form.reset();
});

renderTable();