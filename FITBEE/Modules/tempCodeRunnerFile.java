public class Company {
    private ArrayList<ArrayList<Employee>> departments;

    // constructor to initialize the departments and employees
    public Company() {
        // initialize the departments
        departments = new ArrayList<>();
        for (int i = 0; i < 4; i++) {
            departments.add(new ArrayList<Employee>());
        }

        // add employees to the departments
        for (int i = 0; i < 4; i++) {
            for (int j = 0; j < 10; j++) {
                Employee e = new Employee();
                // set the employee's designation and salary
                // ...
                departments.get(i).add(e);
            }
        }
    }

    public Employee findHighestManagerSalary() {
        Employee highestManager = null;
        double maxSalary = Double.NEGATIVE_INFINITY;

        for (ArrayList<Employee> dept : departments) {
            for (Employee e : dept) {
                if (e.getDesignation().equals("manager") && e.getSalary() > maxSalary) {
                    maxSalary = e.getSalary();
                    highestManager = e;
                }
            }
        }

        return highestManager;
    }

    public Employee findLowestPeonSalary() {
        Employee lowestPeon = null;
        double minSalary = Double.POSITIVE_INFINITY;

        for (ArrayList<Employee> dept : departments) {
            for (Employee e : dept) {
                if (e.getDesignation().equals("peon") && e.getSalary() < minSalary) {
                    minSalary = e.getSalary();
                    lowestPeon = e;
                }
            }
        }

        return lowestPeon;
    }
}