<style>
    .products-page {
        max-width: 1100px;
        margin: 2rem auto;
        padding: 0 1rem;
        font-family: Arial, sans-serif;
        color: #243447;
    }

    .products-page .card {
        background: #fff;
        border: 1px solid #dfe5eb;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        overflow: hidden;
    }

    .products-page .card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        padding: 1rem 1.25rem;
        background: #f4f7fa;
        border-bottom: 1px solid #dfe5eb;
    }

    .products-page .card-header-title {
        margin: 0;
        font-size: 1.25rem;
        font-weight: 600;
    }

    .products-page .card-content {
        padding: 1.25rem;
    }

    .products-page .field {
        margin-bottom: 1rem;
    }

    .products-page .label {
        display: block;
        margin-bottom: 0.35rem;
        font-weight: 600;
    }

    .products-page .input,
    .products-page .textarea,
    .products-page select {
        box-sizing: border-box;
        width: 100%;
        padding: 0.65rem 0.75rem;
        border: 1px solid #c8d1da;
        border-radius: 4px;
        font: inherit;
    }

    .products-page .textarea {
        min-height: 100px;
        resize: vertical;
    }

    .products-page select[multiple] {
        min-height: 110px;
    }

    .products-page .input:focus,
    .products-page .textarea:focus,
    .products-page select:focus {
        border-color: #3273dc;
        outline: 2px solid rgba(50, 115, 220, 0.2);
    }

    .products-page .button {
        display: inline-block;
        padding: 0.6rem 0.9rem;
        border: 0;
        border-radius: 4px;
        color: #fff;
        text-decoration: none;
        cursor: pointer;
        font: inherit;
    }

    .products-page .is-link,
    .products-page .is-info,
    .products-page .is-primary { background: #3273dc; }
    .products-page .is-warning { background: #d99400; }
    .products-page .is-danger { background: #d64545; }

    .products-page .table-wrapper {
        overflow-x: auto;
    }

    .products-page .table {
        width: 100%;
        border-collapse: collapse;
    }

    .products-page .table th,
    .products-page .table td {
        padding: 0.75rem;
        border-bottom: 1px solid #e5e9ed;
        text-align: left;
        vertical-align: middle;
    }

    .products-page .table th {
        background: #f4f7fa;
    }

    .products-page .table tr:hover td {
        background: #fafbfd;
    }

    .products-page .notification {
        margin-bottom: 1rem;
        padding: 0.85rem 1rem;
        border-radius: 4px;
        background: #e5f6e9;
        color: #216b35;
    }

    @media (max-width: 600px) {
        .products-page .card-header {
            align-items: flex-start;
            flex-direction: column;
        }

        .products-page .button {
            font-size: 0.9rem;
        }
    }
</style>