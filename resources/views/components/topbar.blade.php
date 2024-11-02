<div class="top-bar">
    <div class="top-bar-content">
        <h2>{{ $title }}</h2>
        <p>Home > {{ $title }}</p>
    </div>
</div>

<style>
    .top-bar {
        background-color: #462760;
        padding: 20px;
        text-align: center;
    }

    .top-bar-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: auto;
        color: #333;
    }

    .top-bar-content h2 {
        font-size: 34px;
        font-weight: bold;
        color: #ffffff;
    }

    .top-bar-content p {
        font-size: 14px;
        color: #ffffff;
    }
</style>
