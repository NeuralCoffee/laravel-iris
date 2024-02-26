# Laravel con Rubix ML - Addestramento Classificatore con Dataset Iris Flower

Benvenuto nella repository dedicata all'implementazione di un classificatore in Laravel utilizzando la libreria Rubix ML con il famoso dataset Iris Flower. Questo progetto offre un'applicazione pratica dell'intelligenza artificiale in Laravel, fornendo un punto di partenza solido per esplorare le potenzialità del machine learning nel contesto di sviluppo web.

## Descrizione

Questo progetto utilizza il framework Laravel insieme alla libreria Rubix ML per addestrare un classificatore utilizzando il celebre dataset Iris Flower. Il classificatore è in grado di predire la classe di fiori Iris sulla base delle loro caratteristiche, aprendo le porte a molteplici applicazioni in ambito di intelligenza artificiale e sviluppo web.

## Requisiti

- Laravel 10.10
- Composer 2.6.6
- PHP 8.1
- Rubix ML 2.0

## Installazione

Per iniziare, segui questi passaggi:

1. Clona la repository sul tuo ambiente di sviluppo locale:


<code>git clone https://github.com/NeuralCoffee/laravel-iris.git
composer install
cp .env.example .env
php artisan key:generate</code>

## Utilizzo
 Segui la rotta <code>/generate-model</code> per salvare il tuo modello<br>
 Segui la rotta <code>/prediction</code> per ottenere la tua previsione

 ## Licenza
Il codice è rilasciato con licenza <a href="https://www.gnu.org/licenses/licenses.it.html">GNU General Public License</a>.
