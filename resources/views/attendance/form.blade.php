<div class="row align-items-end">
    <div class="col-lg-4">
        <label for="date" class="form-label fw-bold">Date <span class="text-danger">*</span></label>
        <input type="date" name="date" id="date" class="form-control" value="{{ date('Y-m-d') }}" required>
    </div>
    <div class="col-lg-8 text-end">
        <button type="button" class="btn btn-success px-4 shadow-sm" id="btn-present-all">Mark All Present</button>
    </div>
</div>

<div class="alert alert-info border-0 shadow-sm mb-4 mt-4">
    <strong>Note:</strong>
    <p>You can mark all students as present by clicking the button above.</p>
</div>

<div class="table-responsive shadow-sm mb-4">
    <table class="table table-hover align-middle mb-0">
        <thead>
            <tr>
                <th width="5%" class="text-center">
                    <div class="form-check d-flex justify-content-center mb-0">
                        <input type="checkbox" class="form-check-input" id="check-all" title="Check All">
                    </div>
                </th>
                <th width="20%">Student Name</th>
                <th width="15%">Status In</th>
                <th width="12%">Check In</th>
                <th width="15%">Status Out</th>
                <th width="12%">Check Out</th>
                <th width="21%">Note</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $index => $student)
                <tr>
                    <td class="text-center">
                        <div class="form-check d-flex justify-content-center m-0">
                            <input type="checkbox" class="form-check-input student-checkbox"
                                name="attendaces[{{ $index }}][student_id]" value="{{ $student->id }}"
                                id="check-{{ $student->id }}">
                        </div>
                    </td>
                    <td>
                        <label for="student_{{ $student->id }}" class="mb-0 fw-semibold cursor-pointer d-block"
                            {{ $student->name }}>
                        </label>
                    </td>
                    <td>
                        <select class="form-control status-in" name="attendaces[{{ $index }}][status_in]" disabled>
                            <option value="">Select Status...</option>
                            <option value="hadir">Hadir</option>
                            <option value="sakit">Sakit</option>
                            <option value="izin">Izin</option>
                            <option value="alpha">Alpha</option>
                        </select>
                    </td>
                    <td>
                        <input type="time" class="form-control check-in-time" name="attendaces[{{ $index }}][check_in]" disabled>
                    </td>
                    <td>
                        <select class="form-control status-out" name="attendaces[{{ $index }}][status_out]" disabled>
                            <option value="">Select Status...</option>
                            <option value="hadir">Pulang</option>
                            <option value="sakit">Bolos</option>
                            <option value="izin">Izin Pulang Cepat</option>
                        </select>
                    </td>
                      <td>
                        <input type="time" class="form-control check-out-time" name="attendaces[{{ $index }}][check_out]" disabled>
                    </td>
                      <td>
                        <input type="time" class="form-control note-input" name="attendaces[{{ $index }}][note]" placeholder="Optional..." disabled>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center py-5 fw-muted">Data Student Not Found.
                        <a href="route{{ 'student.create' }}">Create Students</a>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<style>
    .cursor-pointer {
        cursor: pointer;
    }
    .student-row.selected {
        background-color: #f2f2f2;
    }
    .form-check-input {
        width: 1,25em;
        height: 1,25em;
        cursor: pointer;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkAllCheckbox = document.getElementById('check-all');
        const studentCheckboxes = document.querySelectorAll('.student-checkbox');
        const btnPresentAll = document.getElementById('btn-present-all');

        function toggleRowinput(checkbox) {
            const row = checkbox.closest('tr');
            const statusIn = row.querySelectorAll('select', input:not([type="checkbox"]));

            if (checkbox.checked) {
                row.classList.add('selected');
                inputs.forEach(input => input.disabled = false);
            } else {
                row.classList.remove('selected');
                inputs.forEach(input => input.disabled = true);
                if(inputs.tagName === 'SELECT') {
                    inputs.value = '';
                } else if(input.type === 'time') {
                    inputs.value = '';
                }
            }
        }

        studentCheckboxes.forEach(checkbox => {
            toggleRowinput(checkbox);

            checkbox.addEventListener('change', function() {
                toggleRowinput(this);
                if(checkAll) {
                    const checkCount = document.querySelectorAll('.student-checkbox:checked').length;
                    checkAll.checked = checkCount === studentCheckboxes.length && studentCheckboxes.length > 0;
                    checkAll.indenterminate = checkCount > 0 && checkCount < studentCheckboxes.length;
                }
            })
        })

        if (checkAll) {
            checkAll.addEventListener('change', function() {
                const isCheked = this.checked;
                studentCheckboxes.forEach(checkbox => {
                    checkbox.checked = isCheked;
                    toggleRowinput(checkbox);
                })
            });
        }
    })
</script>
