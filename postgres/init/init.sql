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

-- Add example tasks
INSERT INTO tasks
    (title, description, status, due_date)
VALUES
    ('Hello World',
        'This is an example task.',
        'pending',
        '2099-01-01'),
    ('Test pending',
        'This is Test.',
        'pending',
        '2099-01-01'),
    ('Test completed',
        'This is Test.',
        'completed',
        '2099-01-01'),
    ('Test in-progress',
        'This is Test.',
        'in-progress',
        '2099-01-01');