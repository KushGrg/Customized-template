# Clone the repository

git clone https://github.com/KushGrg/Customized-template.git
cd Customized-template

# Install PHP dependencies

composer install

# Copy environment file and generate app key

cp .env.example .env
php artisan key:generate

# Set up the database

php artisan migrate --seed

# Install frontend dependencies

npm install

# or if you use Yarn

yarn

# Run the development server

php artisan serve

# In a separate terminal

npm run dev

# or

yarn dev
