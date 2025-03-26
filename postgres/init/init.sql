-- Create the tasks table
DROP TABLE IF EXISTS tasks;
CREATE TABLE tasks
(
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    status VARCHAR(50) DEFAULT 'pending',
    -- can be 'pending', 'in-progress', or 'completed'
    due_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Add example task
INSERT INTO tasks
    (title, description, status, due_date)
VALUES
    ('Hello World',
        'This is an example task.',
        'pending',
        '2099-01-01');
